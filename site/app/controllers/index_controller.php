<?php

class IndexController extends Controller
{
    public function __construct()
    {
    	$this->_pageTitle = IndexConstant::PageTitle;
    }
    /**
     * Route Action
     * アクションコントロールを呼び出し、アクションを指定します。
     */
    public function preProcess()
    {
    	if(count($this->request->getPost()) == 0)
    	{
    		// Postメソッド出ない場合、何もしない。
    		return;
    	}

    	$ret = $this->actionControl();
    	$this->request->setAction($ret);
    }


    /**
     * Overriding parent
     *
     * @return void
     */
    public function initialize()
    {
    	parent::initialize();
        $this->getView()->addJs("bootstrap");
        $this->getView()->addCss("bootstrap");
        $this->getView()->addCss("bootstrap-responsive");
    }

    /**
     * アクションコントロール処理
     * SubmtiされたNameにもとづいて、アクションをコントロールします。
     * @return string アクション名
     */
    public function actionControl()
    {
    	// POST
    	$post = $this->request->getPost();
    	foreach(array_keys($post) as $act)
    	{
    		if($act == IndexConstant::LoginBtn)
    		{
    			return IndexConstant::LoginAct;
    		}
    	}
    	return IndexConstant::IndexAct;
    }
	/**
	 * ログインアクション
	 */
    public function loginAction()
    {
		$req = $this->request;
		$action = $req->getAction();
    }
    /**
     * indexアクション
     */
	public function indexAction()
	{
		// リクエストオブジェクト
		$req = $this->request;

		// コントローラー名
		$controller = $req->getController();
		// アクション名
		$action = $req->getAction();
		// コントローラーサブディレクトリ
		$subdir = $req->getControllerSubDirectory();
		// POST
		$post = $req->getPost();
		// GET
		$query= $req->getQuery();
		// URLパラメーター
		$params= $req->getparams();
	}
}
?>
