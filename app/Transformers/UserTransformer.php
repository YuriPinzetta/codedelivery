<?php

namespace CodeDelivery\Transformers;

use League\Fractal\TransformerAbstract;
use CodeDelivery\Models\User;

/**
 * Class UserTransformer
 * @package namespace CodeDelivery\Transformers;
 */
class UserTransformer extends TransformerAbstract
{
//    protected $defaultIncludes = ['price', 'qtd'];
    protected $availableIncludes = ['client'];


    /**
     * Transform the \User entity
     * @param \User $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }

    public function includeClient(User $model)
    {
        if(!$model->client){
            return null;
        }
        return $this->item($model->client, new ClientTransformer());
    }

//    public function includeCupom(User $model)
//    {
//        if(!$model->cupom){
//            return null;
//        }
//        return $this->item($model->cupom, new CupomTransformer());
//    }
//
//    public function includeItems(User $model)
//    {
//        if(!$model->items){
//            return null;
//        }
//        return $this->collection($model->items, new OrderItemTransformer());
//    }
}
