<?php
namespace Tests\Backend\Routes;
use Tests\BrowserKitTestCase;

/**
 * Class DashboardRouteTest.
 */
class DashboardRouteTest extends BrowserKitTestCase
{
    public function testAdminDashboard(): void
    {
        $this->actingAs($this->admin)->visit('/admin/dashboard')->see('Access Management')->see($this->admin->name);
    }
}
