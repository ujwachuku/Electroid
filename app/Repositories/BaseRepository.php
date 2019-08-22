<?php


namespace App\Repositories;


class BaseRepository
{
    public $model;
    public $order_by_field = 'id';
    public $order_by_direction = 'asc';

    public function all()
    {
        return $this->model->orderBy($this->order_by_field, $this->order_by_direction)->get();
    }

    public function paginate()
    {
        return $this->model->orderBy($this->order_by_field, $this->order_by_direction)->paginate();
    }

    public function delete($model)
    {
        return $this->model->destroy($model->id);
    }
}
