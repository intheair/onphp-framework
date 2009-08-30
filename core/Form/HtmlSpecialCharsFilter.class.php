<?php
/***************************************************************************
 *   Copyright (C) 2005-2007 by Anton E. Lebedevich                        *
 *                                                                         *
 *   This program is free software; you can redistribute it and/or modify  *
 *   it under the terms of the GNU General Public License as published by  *
 *   the Free Software Foundation; either version 3 of the License, or     *
 *   (at your option) any later version.                                   *
 *                                                                         *
 ***************************************************************************/

	/**
	 * HTML Special Characters replacer.
	 * 
	 * @see FiltrablePrimitive::getDisplayValue()
	 * 
	 * @ingroup Filters
	**/
	class HtmlSpecialCharsFilter extends BaseFilter
	{
		public function apply($value)
		{
			return htmlspecialchars($value);
		}
	}
?>