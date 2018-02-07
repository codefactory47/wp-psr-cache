<?php
/**
 * Class BaseCacheSelectorFactory
 *
 * @package LeavesAndLove\WpPsrCache
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/wp-psr-cache
 */

namespace LeavesAndLove\WpPsrCache\CacheSelector;

use LeavesAndLove\WpPsrCache\CacheAdapter\CacheAdapter;

/**
 * Base cache selector factory class.
 *
 * @since 1.0.0
 */
class BaseCacheSelectorFactory implements CacheSelectorFactory
{

    /**
     * Create a cache selector for given persistent cache and non-persistent cache adapters.
     *
     * @since 1.0.0
     *
     * @param CacheAdapter $persistentCache    Default adapter for the persistent cache implementation.
     * @param CacheAdapter $nonPersistentCache Default adapter for the non-persistent cache implementation.
     * @return CacheSelector Cache selector with the passed default cache adapters.
     */
    public function create(CacheAdapter $persistentCache, CacheAdapter $nonPersistentCache): CacheSelector
    {
        return new BaseCacheSelector($persistentCache, $nonPersistentCache);
    }
}
