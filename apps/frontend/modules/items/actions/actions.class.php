<?php

/**
 * items actions.
 *
 * @package    community
 * @subpackage items
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class itemsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->ITEMS    =   CommunityItemsPeer::getItems(10);
  }

  public function executeMyitems(sfWebRequest $request)
  {
      if(!$this->getUser()->isAuthenticated())
      {
          $this->redirect('@sf_guard_signin');
      }

      $this->ITEMS    =   CommunityItemsPeer::getItemsByUser($this->getUser()->getGuardUser()->getId());
      $this->form     =   new CommunityItemsForm();

  }

  public function executeSave(sfWebRequest $request)
  {
    $this->form =   new CommunityItemsForm();
    $this->processForm($request, $this->form);    
  }

  public function executeSearch(sfWebRequest $request)
  {

    $this->forwardUnless($query = $request->getParameter('query'), 'items', 'index');
    $this->ITEMS = CommunityItemsPeer::getForLuceneQuery($query);
    
  }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind(
        $request->getParameter($form->getName())
      );

      if ($form->isValid())
      {
        $item = $form->save();
        $this->redirect('items/myitems');
      }

     }
  
}
