<?php   
class ControllerCommonHome extends Controller {   
        private $error = array();
	public function index() {

		$this->language->load('common/home');
		$this->language->load('/readme');
       $this->lmodel->set('common_home',$this->language->load('common/home'));

		$this->document->setTitle($this->language->get('heading_title') . ' ' .VERSION );

		$this->data['heading_title'] = $this->language->get('heading_title') . ' ' . VERSION;
                /* Readme Texts */
		$this->data['text_title_help'] = $this->language->get('text_title_help');
		$this->data['text_top_help'] = $this->language->get('text_top_help');
		$this->data['text_top_help_2'] = $this->language->get('text_top_help_2');
		$this->data['text_license'] = $this->language->get('text_license');
		$this->data['text_author'] = $this->language->get('text_author');
		$this->data['sub_title_1'] = $this->language->get('sub_title_1');
		$this->data['sub_title_2'] = $this->language->get('sub_title_2');
		$this->data['sub_title_3'] = $this->language->get('sub_title_3');
		$this->data['sub_title_6'] = $this->language->get('sub_title_6');
		$this->data['sub_title_7'] = $this->language->get('sub_title_7');
		$this->data['sub_title_8'] = $this->language->get('sub_title_8');
		$this->data['sub_title_9'] = $this->language->get('sub_title_9');
		$this->data['sub_title_10'] = $this->language->get('sub_title_10');
		$this->data['sub_title_11'] = $this->language->get('sub_title_11');
		$this->data['sub_title_12'] = $this->language->get('sub_title_12');
		$this->data['sub_title_14'] = $this->language->get('sub_title_14');
		$this->data['sub_title_15'] = $this->language->get('sub_title_15');
		$this->data['text_description'] = $this->language->get('text_description');
		$this->data['text_features_1'] = $this->language->get('text_features_1');
		$this->data['text_features_2'] = $this->language->get('text_features_2');
		$this->data['text_features_3'] = $this->language->get('text_features_3');
		$this->data['text_features_4'] = $this->language->get('text_features_4');
		$this->data['text_features_5'] = $this->language->get('text_features_5');
		$this->data['text_features_6'] = $this->language->get('text_features_6');
		$this->data['text_features_7'] = $this->language->get('text_features_7');
		$this->data['text_features_8'] = $this->language->get('text_features_8');
		$this->data['text_features_9'] = $this->language->get('text_features_9');
		$this->data['text_features_10'] = $this->language->get('text_features_10');
		$this->data['text_features_11'] = $this->language->get('text_features_11');
		$this->data['text_install'] = $this->language->get('text_install');
		$this->data['text_functions'] = $this->language->get('text_functions');
		$this->data['text_permissions'] = $this->language->get('text_permissions');
		$this->data['text_steps'] = $this->language->get('text_steps');
		$this->data['text_step_1_1'] = $this->language->get('text_step_1_1');
		$this->data['text_step_1_2'] = $this->language->get('text_step_1_2');
		$this->data['text_step_1_3'] = $this->language->get('text_step_1_3');
		$this->data['text_step_1_4'] = $this->language->get('text_step_1_4');
		$this->data['text_step_1_5'] = $this->language->get('text_step_1_5');
		$this->data['text_step_1_6'] = $this->language->get('text_step_1_6');
		$this->data['text_step_1_7'] = $this->language->get('text_step_1_7');
		$this->data['text_step_1_8'] = $this->language->get('text_step_1_8');
		$this->data['text_step_1_9'] = $this->language->get('text_step_1_9');
		$this->data['text_step_1_10'] = $this->language->get('text_step_1_10');
		$this->data['text_step_2_1'] = $this->language->get('text_step_2_1');
		$this->data['text_step_2_2'] = $this->language->get('text_step_2_2');
		$this->data['text_step_2_3'] = $this->language->get('text_step_2_3');
		$this->data['text_step_3_1'] = $this->language->get('text_step_3_1');
		$this->data['text_step_3_2'] = $this->language->get('text_step_3_2');
		$this->data['text_plan_1_1'] = $this->language->get('text_plan_1_1');
		$this->data['text_plan_1_2'] = $this->language->get('text_plan_1_2');
		$this->data['text_plan_1_3'] = $this->language->get('text_plan_1_3');
		$this->data['text_plan_1_4'] = $this->language->get('text_plan_1_4');
		$this->data['text_plan_1_5'] = $this->language->get('text_plan_1_5');
		$this->data['text_plan_2_1'] = $this->language->get('text_plan_2_1');
		$this->data['text_plan_2_2'] = $this->language->get('text_plan_2_2');
		$this->data['text_plan_2_3'] = $this->language->get('text_plan_2_3');
		$this->data['text_plan_2_4'] = $this->language->get('text_plan_2_4');
		$this->data['text_plan_2_5'] = $this->language->get('text_plan_2_5');
		$this->data['text_plan_2_6'] = $this->language->get('text_plan_2_6');
		$this->data['text_plan_2_7'] = $this->language->get('text_plan_2_7');
		$this->data['text_plan_2_8'] = $this->language->get('text_plan_2_8');
		$this->data['text_plan_3_1'] = $this->language->get('text_plan_3_1');
		$this->data['text_repeat_1_1'] = $this->language->get('text_repeat_1_1');
		$this->data['text_repeat_2_1'] = $this->language->get('text_repeat_2_1');
		$this->data['text_repeat_2_2'] = $this->language->get('text_repeat_2_2');
		$this->data['text_repeat_2_3'] = $this->language->get('text_repeat_2_3');
		$this->data['text_repeat_2_4'] = $this->language->get('text_repeat_2_4');
		$this->data['text_repeat_2_5'] = $this->language->get('text_repeat_2_5');
		$this->data['text_repeat_2_6'] = $this->language->get('text_repeat_2_6');
		$this->data['text_repeat_3_1'] = $this->language->get('text_repeat_3_1');
		$this->data['text_repeat_3_2'] = $this->language->get('text_repeat_3_2');
		$this->data['text_repeat_3_3'] = $this->language->get('text_repeat_3_3');
		$this->data['text_repeat_4_1'] = $this->language->get('text_repeat_4_1');
		$this->data['text_repeat_4_2'] = $this->language->get('text_repeat_4_2');
		$this->data['text_repeat_4_3'] = $this->language->get('text_repeat_4_3');
		$this->data['text_repeat_4_4'] = $this->language->get('text_repeat_4_4');
		$this->data['text_repeat_4_5'] = $this->language->get('text_repeat_4_5');
		$this->data['text_repeat_4_6'] = $this->language->get('text_repeat_4_6');
		$this->data['text_repeat_4_7'] = $this->language->get('text_repeat_4_7');
		$this->data['text_repeat_4_8'] = $this->language->get('text_repeat_4_8');
		$this->data['text_repeat_4_9'] = $this->language->get('text_repeat_4_9');
		$this->data['text_repeat_4_10'] = $this->language->get('text_repeat_4_10');
		$this->data['text_repeat_4_11'] = $this->language->get('text_repeat_4_11');
		$this->data['text_repeat_4_12'] = $this->language->get('text_repeat_4_12');
		$this->data['text_repeat_4_13'] = $this->language->get('text_repeat_4_13');
		$this->data['text_repeat_4_14'] = $this->language->get('text_repeat_4_14');
		$this->data['text_repeat_4_15'] = $this->language->get('text_repeat_4_15');
		$this->data['text_repeat_4_16'] = $this->language->get('text_repeat_4_16');
		$this->data['text_repeat_4_17'] = $this->language->get('text_repeat_4_17');
		$this->data['text_email'] = $this->language->get('text_email');
		$this->data['text_warrantly'] = $this->language->get('text_warrantly');

		$this->load->model('tool/database');

	        $this->data['start_status'] = $this->model_tool_database->hasSetting('simulation_status');

		$this->data['btn_permission'] = $this->language->get('btn_permission');
		$this->data['btn_info'] = $this->language->get('btn_info');
		$this->data['btn_start'] = $this->language->get('btn_start');
		$this->data['btn_logout'] = $this->language->get('btn_logout');

                $this->data['permission'] = $this->url->link('common/home/user');
                $this->data['upgrade_info'] = $this->url->link('upgrade/info');
                $this->data['upgrade_start'] = $this->url->link('upgrade/start');
                $this->data['logout'] = $this->url->link('common/logout');

		$this->load->model('upgrade/info');
		$this->model_upgrade_info->addInfo();

        $status = $this->structure->getUpgrade();
        $upgrade_log = array();
        $cache = DIR_LOGS . 'upgrade_cache.log';
        if($status && is_file($cache)){
        	$cache_content = file_get_contents($cache);
        	if($cache_content !=''){
              $upgrade_log = unserialize($cache_content);
        	}
        }
         if(isset($upgrade_log['db']) && isset($upgrade_log['files'])){
            $this->data['upgrade_log'] = $upgrade_log;
		    $this->data['btn_finish'] = $this->language->get('btn_finish');
		    $this->data['text_unfinished'] = $this->language->get('text_unfinished');
		    $this->data['text_finishing'] = $this->language->get('text_finishing');
            $this->data['clean'] = $this->url->link('upgrade/clean');
         }
		$this->data['breadcrumbs'] = array();

		$this->data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home'),
			'separator' => false
		);

		$this->template = 'common/home.tpl';
		$this->children = array(
			'common/header',
			'common/footer'
		);
		if( !isset($_COOKIE['UpgradeMigration']) ){
						$this->redirect($this->url->link('common/login'));
		}
		$this->response->setOutput($this->render());
	}

	public function permission() {
		if (isset($this->request->get['route'])) {
			$route = '';

		$part = explode('/', $this->request->get['route']);

		$this->data['btn_permission'] = $this->language->get('btn_permission');
                $this->data['permission'] = $this->url->link('common/home/user');
			if (isset($part[0])) {
				$route .= $part[0];
			}

			if (isset($part[1])) {
				$route .= '/' . $part[1];
			}

			$ignore = array(
				'common/home',
				'common/login',
				'common/logout',
				'common/forgotten',
				'common/reset',
				'upgrade/info',
				'upgrade/start',
				'upgrade/images',
				'upgrade/configuration',
                'upgrade/collate',
                'upgrade/column',
                'upgrade/module',
                'upgrade/settings',
                'upgrade/clean',
				'error/not_found',
				'error/permission',
				'upgrade/finish'		
			);			

			if (!in_array($route, $ignore) && !$this->user->hasPermission('access', $route)) {
				return $this->forward('error/permission');
			}
		}
	}	
	public function user() {
		
		$this->language->load('common/user');
		$this->load->model('user/user_group');

		$this->data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home'),
			'separator' => false
		);
		$this->data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_permissions'),
			'href'      => $this->url->link('common/home/user'),
			'separator' => false
		);

		$this->data['heading_title'] = $this->language->get('heading_title');
		$this->data['btn_save'] = $this->language->get('btn_save');
		$this->data['text_new_permissions'] = $this->language->get('text_new_permissions');
		$this->data['btn_upgrade'] = $this->language->get('btn_upgrade');
                $this->data['action'] = $this->url->link('common/home/user');
                $this->data['upgrade_info'] = $this->url->link('upgrade/info');

                $user_group_info = $this->model_user_user_group->getUserGroups();
                $this->data['user_group_info'] = $user_group_info;
                $user_groups = array();
                $user_group_name = array();
                foreach($user_group_info as $user_group){
                       $user_group_name[$user_group['user_group_id']] = $user_group['name'];
                    if($user_group['permission'] !=''){
                       $user_groups[$user_group['user_group_id']] = unserialize($user_group['permission']);
                     } else {
                       $user_groups[$user_group['user_group_id']] = array();
                   }                                         
                 }

                 $upgrade_access = array(
                                         'upgrade/info',
                                         'upgrade/start',
                                         'upgrade/collate',
                                         'upgrade/column',
                                         'upgrade/configuration',
										 'upgrade/module',
										 'upgrade/settings',
										 'upgrade/clean',
                                         'upgrade/images',
                                         'upgrade/finish'
                  );
               
                $ok = 0;

       if( isset($this->request->post['user_group'])){
       	
            $user_group = $this->model_user_user_group->getUserGroup($this->request->post['user_group']);

            foreach($upgrade_access as $perm){
                    if( !array_search($perm, $user_group['modify']) ){
                       $user_group['access'][] = $perm;
                       $user_group['modify'][] = $perm;
                    }
                    $ok++;
            }
    

           if($ok === 0){  

              $this->data['upgrade_access'] = $upgrade_access;  
           } 

           if($ok > 0){
                  $this->model_user_user_group->editUserGroup($this->request->post['user_group'], $user_group );
                  $this->data['upgrade_access'] = $upgrade_access;
            }
        }
   
 		if (isset($this->error['warning'])) {
			$this->data['error_warning'] = $this->error['warning'];
		} else {
			$this->data['error_warning'] = '';
		}

               
		$this->template = 'common/user.tpl';
		$this->children = array(
			'common/header',
			'common/footer'
		);

		$this->response->setOutput($this->render());
   }
   protected function validate() {
		if (!$this->user->hasPermission('modify', 'user/user')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		if (!$this->error) {
			return true;
		} else { 
		//	return false;
		return true;
		}
   }	
}
?>
