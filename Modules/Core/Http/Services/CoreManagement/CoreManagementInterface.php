<?php

namespace Modules\Core\Http\Services\CoreManagement;

interface CoreManagementInterface
{
  /**
   * Get all records from the service
   *
   * @return \Illuminate\Http\JsonResponse string
   */
  public function getAll();

    /**
   * Get all records from the service by a field from the entity
   * @param Array $fields
   *
   * @return \Illuminate\Http\JsonResponse string
   */
  public function getBy(Array $fields);

    /**
   * Creates a record to the bound entity
   *@param Array $input
   * 
   * @return \Illuminate\Http\JsonResponse
   */
  public function create();

    /**
   * Creates a record to the bound entity
   *@param Array $input
   * 
   * @return \Illuminate\Http\JsonResponse
   */
  public function store(Array $input);

    /**
   * Updates a record to the bound entity
   * @param Array $input
   *
   * @return \Illuminate\Http\JsonResponse Collection
   */
  public function update(Array $input);

    /**
   * Deletes a record/records to the bound entity
   * @param Array $input
   *
   * @return \Illuminate\Http\JsonResponse Collection
   */
  public function delete(Array $input);
}
