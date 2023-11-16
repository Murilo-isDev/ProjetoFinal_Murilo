<?php

interface Crud {
    public function create(Cliente $c);
    public function read();
    public function update(Cliente $c);
    public function delete($id);
}