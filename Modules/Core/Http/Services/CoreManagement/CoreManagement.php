<?php

namespace Modules\Core\Http\Services\CoreManagement;

use Illuminate\Routing\Controller;

abstract class CoreManagement implements CoreManagementInterface
{
  /**
   * EloquentRepository instance
   *
   * @var Object
   */
  protected $repository;

/**
 * @param Repository $repository
 */
  public function __construct($repository) 
  {
    $this->repository = $repository;
  }
  /**
   * @inheritDoc
   */
  public function getAll()
  {
    $collection = $this->repository->all();
    
    return response()->json(['data' => $collection, 'success' => 'success']);
  }

  public function getBy(array $fields)
  {
    
  }

  public function create(array $input)
  {

  }

  public function update(array $input)
  {
    
  }

  public function delete(array $input)
  {
    
  }
}
