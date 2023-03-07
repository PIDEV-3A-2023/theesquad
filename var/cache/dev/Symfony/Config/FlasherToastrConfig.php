<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FlasherToastrConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $scripts;
    private $styles;
    private $options;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function scripts($value): self
    {
        $this->_usedProperties['scripts'] = true;
        $this->scripts = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function styles($value): self
    {
        $this->_usedProperties['styles'] = true;
        $this->styles = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function options($value): self
    {
        $this->_usedProperties['options'] = true;
        $this->options = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'flasher_toastr';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('scripts', $value)) {
            $this->_usedProperties['scripts'] = true;
            $this->scripts = $value['scripts'];
            unset($value['scripts']);
        }

        if (array_key_exists('styles', $value)) {
            $this->_usedProperties['styles'] = true;
            $this->styles = $value['styles'];
            unset($value['styles']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['scripts'])) {
            $output['scripts'] = $this->scripts;
        }
        if (isset($this->_usedProperties['styles'])) {
            $output['styles'] = $this->styles;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }

        return $output;
    }

}
