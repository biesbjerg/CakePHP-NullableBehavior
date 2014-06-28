<?php

class NullableBehavior extends ModelBehavior {

/**
 * beforeSave callback
 *
 * Looks for nullable fields in the schema and replaces empty string values for those fields
 * with NULL values. This is helpful as hell when foreign key values are nullable lest you
 * get lots of key constraint errors.
 *
 * @param $Model The model object to be saved.
 * @param $options array
 * @return boolean Success
 */
	public function beforeSave(Model $Model, $options = array()) {
		$schema = $Model->schema();
		foreach ($schema as $field => $metadata) {
			if (isset($Model->data[$Model->alias][$field]) && !empty($metadata['null'])) {
				if ($Model->data[$Model->alias][$field] === '') {
					$Model->data[$Model->alias][$field] = null;
				}
			}
		}
		return true;
	}
}
