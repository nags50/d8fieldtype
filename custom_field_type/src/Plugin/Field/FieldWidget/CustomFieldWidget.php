<?php
namespace Drupal\custom_field_type\Plugin\Field\FieldWidget;
 
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;
 
/**
 * Plugin implementation of the 'entity_user_access_w' widget.
 *
 * @FieldWidget(
 *   id = "custom_field_type_w",
 *   label = @Translation("Custom field type - Widget"),
 *   description = @Translation("Custom field type - Widget"),
 *   field_types = {
 *     "custom_field_type",
 *   },
 *   multiple_values = TRUE,
 * )
 */
 
class CustomFieldWidget extends WidgetBase {
  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element['select'] = array(
      '#type' => 'select',
      '#title' => t('Select'),
      '#description' => t('Select from the list.'),
      '#options' => array(
         'one' => t('Option 1'),
         'two' => t('Option 2'),
         'three' => t('Option 3'),
         // This should be implemented in a better way!
       ),
    );

    $element['text'] = array(
      '#type' => 'textfield',
      '#title' => t('Text'),
      '#description' => t('Fill a text.'),
    );

    return $element;
  }
}