<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: George Wilkinson <delphicokami@hrafn.xyz>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\GoogleTasks\Tests\Unit\Controller;

use OCA\GoogleTasks\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
