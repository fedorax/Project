<?php

class IndexController extends Controller
{
    public function __construct()
    {
    }


    /**
     * Overriding parent
     *
     * @return void
     */
    public function initialize()
    {
    	parent::initialize();

        $this->_pageTitle = "Sample Index";
        $this->getView()->addJs("bootstrap");
        $this->getView()->addCss("bootstrap");
    }

	public function index()
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
