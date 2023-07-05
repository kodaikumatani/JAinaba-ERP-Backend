<?php

namespace App\UseCase\Sales;

use App\Models\Store;

class ShowStoreAction
{
    public function __invoke(
        int $id,
        Store $store,
    ): Store {
        // assert($user->exists);
        // assert($community->exists);
        // assert(!$post->exists);

        return $store->findByID($id);
    }
}
