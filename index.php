require 'vendor/autoload.php';

$app = new Durian\Application();
$app->route('/hello/{name}', function () {
    return 'Hello '.$this->params('name');
});
$app->run()->send();
