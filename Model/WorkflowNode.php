<?php
class WorkflowNode extends workflowAppModel {
	var $name = 'WorkflowNode';
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

	var $hasAndBelongsToMany = array(
		'OutNode' => array(
			'className' => 'workflow.WorkflowNode',
			'foreignKey' => 'incoming_node_id',
			'associationForeignKey' => 'outgoing_node_id',
			'with' => 'workflow.WorkflowNodeConnection'
		)
	);
}
?>
