<?php
namespace Drupal\custom_field_type\Plugin\Field\FieldType;
     
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
     
/**
 * @FieldType(
 *   id = "custom_field_type",
 *   label = @Translation("Custom field type"),
 *   description = @Translation("This field stores a combo fields values."),
 *   default_widget = "custom_field_type_w",
 * )
*/
     
class CustomFieldType extends FieldItemBase {
  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties['select'] = DataDefinition::create('string')
      ->setLabel(t('Select'))
      ->setDescription(t('The Select list value.'));

    $properties['text'] = DataDefinition::create('string')
      ->setLabel(t('Text'))
      ->setDescription(t('A plain text value'));

    return $properties;
  }
     
  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    $columns = array(
        'select' => array(
          'description' => 'The Select list value.',
          'type' => 'varchar',
          'length' => 255,
        ),
        'text' => array(
          'description' => 'A plain text value.',
          'type' => 'varchar',
          'length' => 255,
        )
      );
     
      $schema = array(
        'columns' => $columns,
        'indexes' => array(),
        'foreign keys' => array(),
      );
    
      return $schema;
  }
}