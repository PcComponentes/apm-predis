# Elastic APM for Predis

This library supports Span traces of [Symfony HttpKernel](https://github.com/symfony/http-kernel) requests.

## Installation

1) Install via [composer](https://getcomposer.org/)

    ```shell script
    composer require pccomponentes/apm-predis-client
    ```

## Usage

In all cases, an already created instance of [ElasticApmTracer](https://github.com/zoilomora/elastic-apm-agent-php) is assumed.

### Service Container (Symfony)

```yaml
apm.predis_client:
    class: PcComponentes\ApmPredis\ApmPredis
    arguments: ['@service.cache.redis', '@apm.tracer', 'demo']
```

## License
Licensed under the [MIT license](http://opensource.org/licenses/MIT)

Read [LICENSE](LICENSE) for more information
