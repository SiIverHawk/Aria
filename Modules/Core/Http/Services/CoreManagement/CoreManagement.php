<?php

namespace Modules\Core\Http\Services\CoreManagement;

use Illuminate\Support\Facades\DB;

abstract class CoreManagement implements CoreManagementInterface
{
  /**
   * EloquentRepository instance
   *
   * @var Object
   */
  protected $repository;

  protected $DB;

  /**
   * @param Repository $repository
   */
  public function __construct($repository, DB $DB)
  {
    $this->repository = $repository;
    $this->DB = $DB;
  }

  /**
   * @inheritDoc
   */
  public function getAll()
  {
    $this->DB::beginTransaction();

    try {
      $collection = $this->repository->all();

      if ($collection->isEmpty()) {
        return response()->json([
          'title' => 'Error retrieving data',
          'text' => 'There are no records to retrieve',
          'status' => 'error',
          'type' => 'modal',
          'success' => false
        ]);
      }

      $this->DB::commit();
    } catch (\Exception $e) {
      $this->DB::rollBack();

      throw $e;
    } catch (\Throwable $th) {
      $this->DB::rollBack();

      throw $th;
    }

    return response()->json([
      'data' => $collection,
      'title' => 'Data successfully retrieved',
      'status' => 'success',
      'type' => 'notification-modal',
      'success' => true
    ]);
  }


  public function getBy(array $data)
  {
    $this->DB::beginTransaction();

    try {
      $collection = $this->repository->whereIn($data);

      if ($collection->isEmpty()) {
        return response()->json([
          'title' => 'Error retrieving data',
          'text' => 'There are no records to retrieve',
          'status' => 'error',
          'type' => 'modal',
          'success' => false
        ]);
      }

      $this->DB::commit();
    } catch (\Exception $e) {
      $this->DB::rollBack();

      throw $e;
    } catch (\Throwable $th) {
      $this->DB::rollBack();

      throw $th;
    }

    return response()->json([
      'data' => $collection,
      'title' => 'Data successfully retrieved',
      'status' => 'success',
      'type' => 'notification-modal',
      'success' => true
    ]);
  }

  public function create()
  {
    
  }

  public function store(array $input)
  {
    $this->DB::beginTransaction();

    try {
      $collection = $this->repository->create($input);

      if ($collection->isEmpty()) {
        return response()->json([
          'title' => 'Error creating records',
          'text' => 'There was a problem during the process',
          'status' => 'error',
          'type' => 'modal',
          'success' => false
        ]);
      }

      $this->DB::commit();
    } catch (\Exception $e) {
      $this->DB::rollBack();

      throw $e;
    } catch (\Throwable $th) {
      $this->DB::rollBack();

      throw $th;
    }

    return response()->json([
      'data' => $collection,
      'title' => 'Data successfully created',
      'status' => 'success',
      'type' => 'notification-modal',
      'success' => true
    ]);
  }

  public function update(array $input)
  {
  }

  public function delete(array $input)
  {
  }
}
