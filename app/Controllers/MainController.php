

namespace App\Controllers;
use App\Models\MainModel;
use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function save()
    {
        $data = [
            'id'=>$this->request->getVar('id'),
            'email'=>$this->request->getVar('email'),
            'username'=>$this->request->getVar('username') ,   
            'password'=>$this->request->getVar('password'),  
        ];
        $main= new MainModel();
        $main->save($data);
       
    }
    public function index()
    {
        $main= new MainModel();
        $data ['bb'] = $main->findAll();
        return view('main', $data);
    }
}