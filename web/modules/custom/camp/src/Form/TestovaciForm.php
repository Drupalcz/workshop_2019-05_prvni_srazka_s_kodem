<?php

namespace Drupal\camp\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class TestovaciForm.
 */
class TestovaciForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'testovaci_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['souhlasis'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Souhlasis?'),
      '#description' => $this->t('Musis! :-)'),
      '#weight' => '10',
    ];
    $form['poznamka'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Poznamka'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '20',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#weight' => '30',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }

  }

}
