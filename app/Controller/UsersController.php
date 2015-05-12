<?php 
class UsersController extends AppController{
	public function create(){
		$this->layout='default';
		if(!empty($this->request->data))
        {
                //now do the save
                if($this->User->save($this->data)) {
                	$this->Session->setFlash('Successful');
                	$id=$this->User->getLastInsertId();
                	$this->redirect(array('controller'=>'users','action'=>'view',$id));	
                } else {
                	$this->Session->setFlash('Fail');
                }
        }
	}
	public function view($id=null){
		$this->layout='default';
		if($id != null){
			$photo=$this->User->findById($id);
		//pr($id);
		$this->set('photo',$photo);
		}
		else
		{
			$this->Session->setFlash('Sorry no Images are there to Display');
		}
		//$id=$this->User->getLastInsertId();
		
	}
		// if(!empty($this->request->is('post'))){
		// 	//Check if image has been Uploaded
		// 	if(!empty($this->data['User']))
		// 	{
		// 		$file = $this->request->data['User']['upload'];//put the data into var for easy use

		// 		$imageTypes = array('image/gif','image/jpeg','image/png');//set allowed extension
		// 		$uploadFolder = 'uploads';
		// 		$uploadPath = WWW_ROOT . $uploadFolder;

		// 		foreach ($imageTypes as $type) {
		// 			if($type == $file['type']){
		// 				if($file['error'] == 0){
		// 					$imageName = $file['name'];
		// 					if(file_exists($uploadPath . '/' . $imageName)){
		// 						$imageName = date('His') . $imageName;
		// 					}
		// 					$full_path_name = $uploadPath . '/' . $imageName;
		// 					if(move_uploaded_file($file['temp_name'], $full_path_name)){
		// 						$this->Session->setFlash('File upload Successful');
		// 						$this->set('imageName',$imageName);
		// 					}
		// 					else{
		// 						$this->Session->setFlash('There  was a problem uploading file. Please tyr again');
		// 					}

		// 				}
		// 				else{
		// 					$this->Session->setFlash('Error Uploading File');
		// 				}
		// 				break;
		// 			}
		// 			else
		// 			{
		// 				$this->Session->setFlash('Unacceptable File Type');
		// 			}

		// 			# code...
		// 		}
		// 		//only process if the extension is valid
				
		// 	}
		// }
}
