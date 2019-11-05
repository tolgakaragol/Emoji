<?php

namespace TolgaKaragol\Emoji\Traits\Sub\Objects;

/**
 * Trait LockTrait
 * @package TolgaKaragol\Emoji\Traits\Sub\Objects\LockTrait
 *
 * @property string locked 🔒
 * @property string unlocked 🔓
 * @property string lockedWithPen 🔏
 * @property string lockedWithKey 🔐
 * @property string key 🔑
 * @property string oldKey 🗝
 */
trait LockTrait
{
    protected static $locked = '&#x1f512;';
    protected static $unlocked = '&#x1f513;';
    protected static $lockedWithPen = '&#x1f50f;';
    protected static $lockedWithKey = '&#x1f510;';
    protected static $key = '&#x1f511;';
    protected static $oldKey = '&#x1f5dd;';
}