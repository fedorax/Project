<?php

class IndexController extends Controller
{
    public function __construct()
    {
    	//require_once 'constants/index_constant.php';
    }
    /**
     * Route Action
     * アクションコントロールを呼び出し、アクションを指定します。
     */
    public function postProcess()
    {
    	if(count($this->request->getPost()) == 0)
    	{
    		// Postメソッド出ない場合、何もしない。
    		return;
    	}
    	$files_arr = get_included_files();
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

        $this->_pageTitle = "Sample Index";
        $this->getView()->addJs("bootstrap");
        $this->getView()->addCss("bootstrap");
    }

    /**
     * アクションコントロール処理
     * SubmtiされたNameにもとづいて、アクションをコントロールします。
     * @return string アクション名
     */
    public function actionControl()
    {
    	echo IndexConstant::LoginBtn;
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
    public function login()
    {
		$req = $this->request;
		$action = $req->getAction();
    }
    /**
     * indexアクション
     */
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
