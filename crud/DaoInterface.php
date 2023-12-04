<?php

interface DaoInterface
{
    function getAll();
    function getById(int $id);
    function saveOrUpdate(User $user);
    function deleteById(int $id): bool;
}