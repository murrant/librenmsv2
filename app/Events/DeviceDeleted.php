<?php

namespace App\Events;

use App\Models\Device;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DeviceDeleted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $device;

    /**
     * Create a new event instance.
     *
     * @param Device $device
     */
    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return [new PrivateChannel('devices'), new PrivateChannel('devices.'.$this->device->device_id)];
    }
}