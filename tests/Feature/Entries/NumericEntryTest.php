<?php

declare(strict_types=1);

use Honed\Infolist\Entries\NumericEntry;

beforeEach(function () {
    $this->entry = NumericEntry::make('age');
});

it('has text type', function () {
    expect($this->entry)
        ->getType()->toBe(NumericEntry::NUMERIC);
});

it('has array representation', function () {
    expect($this->entry->toArray())
        ->toBeArray()
        ->toEqual([
            'type' => NumericEntry::NUMERIC,
            'label' => 'Age',
            'state' => null,
            'placehold' => null,
            'badge' => null,
            'variant' => null,
            'class' => null,
        ]);
});

it('serializes to json', function () {
    expect($this->entry->jsonSerialize())
        ->toBeArray()
        ->toEqual([
            'type' => NumericEntry::NUMERIC,
            'label' => 'Age',
        ]);
});
