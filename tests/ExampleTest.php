<?php

require_once __DIR__ . "/../vendor/autoload.php";
it('afm is Valid - 1', function () {
    expect(\Kgalanos\CheckAfm\CheckAfm::checkAfm('011111111')->isValid())->toBeTrue();
});
it('afm is Valid - 2', function () {
    expect(\Kgalanos\CheckAfm\CheckAfm::checkAfm('997209513')->isValid())->toBeTrue();
});
it('afm is Valid - 3', function () {
    expect(\Kgalanos\CheckAfm\CheckAfm::checkAfm('090393150')->isValid())->toBeTrue();
});

it('afm is Valid - 4', function () {
    expect(\Kgalanos\CheckAfm\CheckAfm::checkAfm('090165560')->isValid())->toBeTrue();
});
it('afm is inValid - 1', function () {
    expect(\Kgalanos\CheckAfm\CheckAfm::checkAfm('011111119')->isValid())->toBeFalse();
});
