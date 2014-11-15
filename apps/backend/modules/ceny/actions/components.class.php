<?php
class cenyComponents extends sfComponents
{
  public function executeShowCenyRadky(sfWebRequest $request)
  {
    $galleryId = $request->getParameter('id');
    if($galleryId)
    {
      $query = Doctrine_Query::create()->from('CenyRadky i')
        ->where('i.ceny_id = ?', $galleryId)
        ->orderBy('i.radek ASC');

      $this->images = $query->execute();
    }
  }
}