<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\WishlistExtension\Dependency\Plugin;

use Generated\Shared\Transfer\WishlistItemTransfer;
use Generated\Shared\Transfer\WishlistPreAddItemCheckResponseTransfer;

interface AddItemPreCheckPluginInterface
{
    /**
     * Specification:
     * - This plugin is executed before add item operation is executed.
     * - Should return `WishlistPreAddItemCheckResponse` transfer object where error messages and flag that check is failed are set.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\WishlistItemTransfer $wishlistItemTransfer
     *
     * @return \Generated\Shared\Transfer\WishlistPreAddItemCheckResponseTransfer
     */
    public function check(WishlistItemTransfer $wishlistItemTransfer): WishlistPreAddItemCheckResponseTransfer;
}
