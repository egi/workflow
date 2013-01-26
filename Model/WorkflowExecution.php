<?php
class WorkflowExecution extends workflowAppModel {
	var $name = 'WorkflowExecution';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Workflow' => array(
			'className' => 'workflow.WorkflowWorkflow',
			'foreignKey' => 'workflow_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParentWorkflowExecution' => array(
			'className' => 'workflow.WorkflowExecution',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'ChildWorkflowExecution' => array(
			'className' => 'workflow.WorkflowExecution',
			'foreignKey' => 'parent_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => true,
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'State' => array(
			'className' => 'workflow.WorkflowExecutionState',
			'foreignKey' => 'execution_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => true,
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>
