<?php

namespace App\Helpers;

/**
 * Class Session
 * @package App\Helpers
 */
class Session
{
    /**
     * Create and return a Session instance
     *
     * @return Session
     */
    public static function getInstance()
    {
        static $instance = null;

        if ($instance === null) {
            $instance = new static();
        }

        return $instance;
    }

    /**
     * Start Session Handler
     */
    public function start()
    {
        session_start();
    }

    /**
     * Stop Session Handler
     */
    public function destroy()
    {
        session_destroy();
    }

    /**
     * Check if a Key exists in the Session
     *
     * @param mixed $key
     * @return bool
     */
    public function has($key)
    {
        return array_key_exists($key, $_SESSION);
    }

    /**
     * Store a Variable in the Session
     *
     * @param string $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Get a Attribute Value from Session
     *
     * @param string $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->has($key) ? $_SESSION[$key] : null;
    }

    /**
     * Erase a Attribute from Session
     *
     * @param string $key
     */
    public function erase($key)
    {
        $_SESSION[$key] = '';
    }
}