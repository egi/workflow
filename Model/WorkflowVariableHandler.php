<?php
class WorkflowVariableHandler extends workflowAppModel {
	var $name = 'WorkflowVariableHandler';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Workflow' => array(
			'className' => 'workflow.WorkflowWorkflow',
			'foreignKey' => 'workflow_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>
