<?php
   declare(strict_types=1);

    namespace Chameleon;

    /**
     * Class Options bundles a set of options for an operation as key-value pairs (string to mixed)
     * @package Chameleon
     */
    class Options {
        private $data;

        /**
         * Options constructor.
         *
         * @param array[]|null[] ...$pairs
         */
        public function __construct(?array ...$pairs) {
            $this -> data = [];

            foreach ($pairs as $pair) {
                foreach ($pair as $key => $value) {
                    $this -> setOption($key, $value);
                }
            }
        }

        /**
         * Get option value.
         *
         * @param string $name Option name
         *
         * @return mixed Option value
         */
        public function getOption(string $name) {
            return $this -> data[$name];
        }

        /**
         * Set option value.
         *
         * @param string $name
         * @param $value
         */
        public function setOption(string $name, $value) : void {
            $this -> data[$name] = $value;
        }
    }