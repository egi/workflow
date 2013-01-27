<?php
class WorkflowNodeConnection extends workflowAppModel {
	var $name = 'WorkflowNodeConnection';
	var $primaryKey = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'IncomingNode' => array(
			'className' => 'workflow.WorkflowNode',
			'foreignKey' => 'incoming_node_id',
			'type' => 'INNER',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OutgoingNode' => array(
			'className' => 'workflow.WorkflowNode',
			'foreignKey' => 'outgoing_node_id',
			'type' => 'INNER',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>
