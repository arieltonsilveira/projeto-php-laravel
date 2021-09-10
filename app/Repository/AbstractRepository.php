<?php


namespace App\Repository;


class AbstractRepository
{
    protected $model;

    public function show(array $filter=[])
    {
        return $this->model->where($filter)->paginate();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function find(string $id)
    {
        return $this->model->find($id);
    }

    public function update(array $data, int $id)
    {
        return  $this->model->find($id)->update($data);
    }

    public function destroy(string $id)
    {
        $data = $this->model->find($id);
        if (!empty($data)) $data->delete();
        return true;
    }
}
