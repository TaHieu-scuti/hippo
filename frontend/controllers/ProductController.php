<?php

namespace frontend\controllers;

use Yii;
use common\models\Product;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Category;
use common\models\Order;
use common\models\OrderItem;
use common\models\Cart;
use common\models\User;
use common\components\PayJpComponent;
use common\libs\Cart as ShoppingCart;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionPayment()
    {
        $this->layout = 'cart-list';
        $user = new User;
        $cart = new ShoppingCart;
        $member = $user->getUserCurrent();
        $payment = new PayJpComponent(Yii::$app->params['privateApiPayJp']);
        $success = $payment->transaction($_POST['payjpToken'], (int)$_POST['price']);
        if ($success === false) {
            return $this->render('@frontend/views/payment/error');
        }

        $order = Order::createNewOrder($member);
        $orderItem = OrderItem::createNewOrderItem($order, $_POST['productId'], $member);
        $cart->deleteCart($_POST['productId']);
        Yii::$app->session->setFlash('success', "Bạn đã thanh toán thành công");
        return $this->render('@frontend/views/product/cart', ['listCart' => Yii::$app->session['cart']]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionCategory($id)
    {
        $category = $this->findCategory($id);
        return $this->render('loaiSanPham', ['category' => $category]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionDetail($id)
    {
        $model = $this->findModel($id);
        $modelCart = new Cart;
        return $this->render('@frontend/views/site/detail', ['product' => $model, 'model' => $modelCart]);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findCategory($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
