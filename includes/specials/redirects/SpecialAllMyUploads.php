<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

namespace MediaWiki\Specials\Redirects;

use MediaWiki\SpecialPage\RedirectSpecialPage;
use MediaWiki\SpecialPage\SpecialPage;
use MediaWiki\Title\Title;

/**
 * Redirect to current user's uploaded files, including old versions.
 *
 * @see SpecialMyuploads
 * @ingroup SpecialPage
 */
class SpecialAllMyUploads extends RedirectSpecialPage {
	public function __construct() {
		parent::__construct( 'AllMyUploads' );
		$this->mAllowedRedirectParams = [ 'limit', 'ilsearch' ];
	}

	/**
	 * @param string|null $subpage
	 * @return Title
	 */
	public function getRedirect( $subpage ) {
		$this->mAddedRedirectParams['ilshowall'] = 1;

		return SpecialPage::getTitleFor( 'Listfiles', $this->getUser()->getName() );
	}

	/**
	 * Target identifies a specific User. See T109724.
	 *
	 * @since 1.27
	 * @return bool
	 */
	public function personallyIdentifiableTarget() {
		return true;
	}
}
/**
 * Retain the old class name for backwards compatibility.
 * @deprecated since 1.41
 */
class_alias( SpecialAllMyUploads::class, 'SpecialAllMyUploads' );
