<?php

namespace App\Services;

class Cart
{
    protected string $key = 'cart';

    public function content(): array
    {
        return session($this->key, []);
    }

    public function add(int $id, string $name, float $price, int $qty = 1): void
    {
        $cart = $this->content();

        if (isset($cart[$id])) {
            $cart[$id]['qty'] += $qty;
        } else {
            $cart[$id] = compact('id', 'name', 'price', 'qty');
        }

        session([$this->key => $cart]);
    }

    public function update(int $id, int $qty): void
    {
        $cart = $this->content();
        if (!isset($cart[$id])) return;

        if ($qty <= 0) {
            unset($cart[$id]);
        } else {
            $cart[$id]['qty'] = $qty;
        }

        session([$this->key => $cart]);
    }

    public function remove(int $id): void
    {
        $this->update($id, 0);
    }

    public function count(): int
    {
        return collect($this->content())->sum('qty');
    }

    public function total(): float
    {
        return collect($this->content())->sum(fn($i) => $i['price'] * $i['qty']);
    }

    public function clear(): void
    {
        session()->forget($this->key);
    }
}
