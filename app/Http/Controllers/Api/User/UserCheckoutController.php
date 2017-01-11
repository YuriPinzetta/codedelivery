<?php

namespace CodeDelivery\Http\Controllers\Api\User;

use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class UserCheckoutController extends Controller
{
    private $repository;

    public function __construct
    (
        UserRepository $repository
    )
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $id = Authorizer::getResourceOwnerId();
//        $user = $this->repository->find($id);
        $user = $this->repository->with(['client'])->scopeQuery(function ($query) use($id){
            return $query->where('id', '=', $id);
        })->paginate();

        return $user;
    }

    public function store(Request $request)
    {
//        $data = $request->all();
//        $id = Authorizer::getResourceOwnerId();
//        $clientId = $this->userRepository->find($id)->client->id;
//        $data['client_id'] = $clientId;
//
//        $o = $this->service->create($data);
//        $o = $this->repository->with('items')->find($o->id);
//        return $o;
    }

    public function show($id)
    {
//        $o = $this->repository->with(['client','items', 'cupom'])->find($id);
//        $o->items->each(function ($item){
//            $item->product;
//        });
//        return $o;
    }
}
