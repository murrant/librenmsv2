<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Device
 *
 * @property integer $device_id
 * @property string $hostname
 * @property string $sysName
 * @property mixed $ip
 * @property string $community
 * @property string $authlevel
 * @property string $authname
 * @property string $authpass
 * @property string $authalgo
 * @property string $cryptopass
 * @property string $cryptoalgo
 * @property string $snmpver
 * @property integer $port
 * @property string $transport
 * @property integer $timeout
 * @property integer $retries
 * @property string $bgpLocalAs
 * @property string $sysObjectID
 * @property string $sysDescr
 * @property string $sysContact
 * @property string $version
 * @property string $hardware
 * @property string $features
 * @property string $location
 * @property string $os
 * @property boolean $status
 * @property string $status_reason
 * @property boolean $ignore
 * @property boolean $disabled
 * @property integer $uptime
 * @property integer $agent_uptime
 * @property string $last_polled
 * @property string $last_poll_attempted
 * @property float $last_polled_timetaken
 * @property float $last_discovered_timetaken
 * @property string $last_discovered
 * @property string $last_ping
 * @property float $last_ping_timetaken
 * @property string $purpose
 * @property string $type
 * @property string $serial
 * @property string $icon
 * @property integer $poller_group
 * @property boolean $override_sysLocation
 * @property string $notes
 * @property integer $port_association_mode
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Port[] $ports
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Syslog[] $syslogs
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Eventlog[] $eventlogs
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereDeviceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereHostname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereSysName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereCommunity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereAuthlevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereAuthname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereAuthpass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereAuthalgo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereCryptopass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereCryptoalgo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereSnmpver($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device wherePort($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereTransport($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereTimeout($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereRetries($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereBgpLocalAs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereSysObjectID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereSysDescr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereSysContact($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereVersion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereHardware($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereFeatures($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereOs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereStatusReason($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereIgnore($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereDisabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereUptime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereAgentUptime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereLastPolled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereLastPollAttempted($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereLastPolledTimetaken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereLastDiscoveredTimetaken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereLastDiscovered($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereLastPing($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereLastPingTimetaken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device wherePurpose($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereSerial($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereIcon($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device wherePollerGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereOverrideSysLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device whereNotes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Device wherePortAssociationMode($value)
 */
	class Device extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Eventlog
 *
 * @property integer $device_id
 * @property string $hostname
 * @property string $sysName
 * @property mixed $ip
 * @property string $community
 * @property string $authlevel
 * @property string $authname
 * @property string $authpass
 * @property string $authalgo
 * @property string $cryptopass
 * @property string $cryptoalgo
 * @property string $snmpver
 * @property integer $port
 * @property string $transport
 * @property integer $timeout
 * @property integer $retries
 * @property string $bgpLocalAs
 * @property string $sysObjectID
 * @property string $sysDescr
 * @property string $sysContact
 * @property string $version
 * @property string $hardware
 * @property string $features
 * @property string $location
 * @property string $os
 * @property boolean $status
 * @property string $status_reason
 * @property boolean $ignore
 * @property boolean $disabled
 * @property integer $uptime
 * @property integer $agent_uptime
 * @property string $last_polled
 * @property string $last_poll_attempted
 * @property float $last_polled_timetaken
 * @property float $last_discovered_timetaken
 * @property string $last_discovered
 * @property string $last_ping
 * @property float $last_ping_timetaken
 * @property string $purpose
 * @property string $type
 * @property string $serial
 * @property string $icon
 * @property integer $poller_group
 * @property boolean $override_sysLocation
 * @property string $notes
 * @property integer $port_association_mode
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereDeviceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereHostname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereSysName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereCommunity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereAuthlevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereAuthname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereAuthpass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereAuthalgo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereCryptopass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereCryptoalgo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereSnmpver($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog wherePort($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereTransport($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereTimeout($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereRetries($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereBgpLocalAs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereSysObjectID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereSysDescr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereSysContact($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereVersion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereHardware($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereFeatures($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereOs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereStatusReason($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereIgnore($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereDisabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereUptime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereAgentUptime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereLastPolled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereLastPollAttempted($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereLastPolledTimetaken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereLastDiscoveredTimetaken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereLastDiscovered($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereLastPing($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereLastPingTimetaken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog wherePurpose($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereSerial($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereIcon($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog wherePollerGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereOverrideSysLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog whereNotes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Eventlog wherePortAssociationMode($value)
 */
	class Eventlog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notification
 *
 * @property integer $notifications_id
 * @property string $title
 * @property string $body
 * @property string $source
 * @property string $checksum
 * @property string $datetime
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NotificationAttrib[] $attribs
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereNotificationsId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereSource($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereChecksum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereDatetime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification isUnread()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification isArchived($request)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification limit()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification source()
 */
	class Notification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NotificationAttrib
 *
 * @property integer $attrib_id
 * @property integer $notifications_id
 * @property integer $user_id
 * @property string $key
 * @property string $value
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NotificationAttrib whereAttribId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NotificationAttrib whereNotificationsId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NotificationAttrib whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NotificationAttrib whereKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NotificationAttrib whereValue($value)
 */
	class NotificationAttrib extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Port
 *
 * @property integer $port_id
 * @property integer $device_id
 * @property string $port_descr_type
 * @property string $port_descr_descr
 * @property string $port_descr_circuit
 * @property string $port_descr_speed
 * @property string $port_descr_notes
 * @property string $ifDescr
 * @property string $ifName
 * @property string $portName
 * @property integer $ifIndex
 * @property integer $ifSpeed
 * @property string $ifConnectorPresent
 * @property string $ifPromiscuousMode
 * @property integer $ifHighSpeed
 * @property string $ifOperStatus
 * @property string $ifOperStatus_prev
 * @property string $ifAdminStatus
 * @property string $ifAdminStatus_prev
 * @property string $ifDuplex
 * @property integer $ifMtu
 * @property string $ifType
 * @property string $ifAlias
 * @property string $ifPhysAddress
 * @property string $ifHardType
 * @property string $ifLastChange
 * @property string $ifVlan
 * @property string $ifTrunk
 * @property integer $ifVrf
 * @property integer $counter_in
 * @property integer $counter_out
 * @property boolean $ignore
 * @property boolean $disabled
 * @property boolean $detailed
 * @property boolean $deleted
 * @property string $pagpOperationMode
 * @property string $pagpPortState
 * @property string $pagpPartnerDeviceId
 * @property string $pagpPartnerLearnMethod
 * @property integer $pagpPartnerIfIndex
 * @property integer $pagpPartnerGroupIfIndex
 * @property string $pagpPartnerDeviceName
 * @property string $pagpEthcOperationMode
 * @property string $pagpDeviceId
 * @property integer $pagpGroupIfIndex
 * @property integer $ifInUcastPkts
 * @property integer $ifInUcastPkts_prev
 * @property integer $ifInUcastPkts_delta
 * @property integer $ifInUcastPkts_rate
 * @property integer $ifOutUcastPkts
 * @property integer $ifOutUcastPkts_prev
 * @property integer $ifOutUcastPkts_delta
 * @property integer $ifOutUcastPkts_rate
 * @property integer $ifInErrors
 * @property integer $ifInErrors_prev
 * @property integer $ifInErrors_delta
 * @property integer $ifInErrors_rate
 * @property integer $ifOutErrors
 * @property integer $ifOutErrors_prev
 * @property integer $ifOutErrors_delta
 * @property integer $ifOutErrors_rate
 * @property integer $ifInOctets
 * @property integer $ifInOctets_prev
 * @property integer $ifInOctets_delta
 * @property integer $ifInOctets_rate
 * @property integer $ifOutOctets
 * @property integer $ifOutOctets_prev
 * @property integer $ifOutOctets_delta
 * @property integer $ifOutOctets_rate
 * @property integer $poll_time
 * @property integer $poll_prev
 * @property integer $poll_period
 * @property-read \App\Models\Device $device
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePortId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereDeviceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePortDescrType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePortDescrDescr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePortDescrCircuit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePortDescrSpeed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePortDescrNotes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfDescr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePortName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfIndex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfSpeed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfConnectorPresent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfPromiscuousMode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfHighSpeed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOperStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOperStatusPrev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfAdminStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfAdminStatusPrev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfDuplex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfMtu($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfPhysAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfHardType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfLastChange($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfVlan($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfTrunk($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfVrf($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereCounterIn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereCounterOut($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIgnore($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereDisabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereDetailed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereDeleted($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePagpOperationMode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePagpPortState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePagpPartnerDeviceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePagpPartnerLearnMethod($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePagpPartnerIfIndex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePagpPartnerGroupIfIndex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePagpPartnerDeviceName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePagpEthcOperationMode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePagpDeviceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePagpGroupIfIndex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInUcastPkts($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInUcastPktsPrev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInUcastPktsDelta($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInUcastPktsRate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutUcastPkts($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutUcastPktsPrev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutUcastPktsDelta($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutUcastPktsRate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInErrors($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInErrorsPrev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInErrorsDelta($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInErrorsRate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutErrors($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutErrorsPrev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutErrorsDelta($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutErrorsRate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInOctets($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInOctetsPrev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInOctetsDelta($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfInOctetsRate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutOctets($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutOctetsPrev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutOctetsDelta($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port whereIfOutOctetsRate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePollTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePollPrev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Port wherePollPeriod($value)
 */
	class Port extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Syslog
 *
 * @property integer $device_id
 * @property string $hostname
 * @property string $sysName
 * @property mixed $ip
 * @property string $community
 * @property string $authlevel
 * @property string $authname
 * @property string $authpass
 * @property string $authalgo
 * @property string $cryptopass
 * @property string $cryptoalgo
 * @property string $snmpver
 * @property integer $port
 * @property string $transport
 * @property integer $timeout
 * @property integer $retries
 * @property string $bgpLocalAs
 * @property string $sysObjectID
 * @property string $sysDescr
 * @property string $sysContact
 * @property string $version
 * @property string $hardware
 * @property string $features
 * @property string $location
 * @property string $os
 * @property boolean $status
 * @property string $status_reason
 * @property boolean $ignore
 * @property boolean $disabled
 * @property integer $uptime
 * @property integer $agent_uptime
 * @property string $last_polled
 * @property string $last_poll_attempted
 * @property float $last_polled_timetaken
 * @property float $last_discovered_timetaken
 * @property string $last_discovered
 * @property string $last_ping
 * @property float $last_ping_timetaken
 * @property string $purpose
 * @property string $type
 * @property string $serial
 * @property string $icon
 * @property integer $poller_group
 * @property boolean $override_sysLocation
 * @property string $notes
 * @property integer $port_association_mode
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereDeviceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereHostname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereSysName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereCommunity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereAuthlevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereAuthname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereAuthpass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereAuthalgo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereCryptopass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereCryptoalgo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereSnmpver($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog wherePort($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereTransport($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereTimeout($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereRetries($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereBgpLocalAs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereSysObjectID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereSysDescr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereSysContact($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereVersion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereHardware($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereFeatures($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereOs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereStatusReason($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereIgnore($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereDisabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereUptime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereAgentUptime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereLastPolled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereLastPollAttempted($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereLastPolledTimetaken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereLastDiscoveredTimetaken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereLastDiscovered($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereLastPing($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereLastPingTimetaken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog wherePurpose($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereSerial($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereIcon($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog wherePollerGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereOverrideSysLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog whereNotes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Syslog wherePortAssociationMode($value)
 */
	class Syslog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property string $realname
 * @property string $email
 * @property string $descr
 * @property boolean $level
 * @property boolean $can_modify_passwd
 * @property string $twofactor
 * @property integer $dashboard
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $remember_token
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Device[] $devices
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Port[] $ports
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRealname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereDescr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCanModifyPasswd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereTwofactor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereDashboard($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRememberToken($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DbConfig
 *
 * @property integer $config_id
 * @property string $config_name
 * @property string $config_value
 * @property string $config_default
 * @property string $config_descr
 * @property string $config_group
 * @property integer $config_group_order
 * @property string $config_sub_group
 * @property integer $config_sub_group_order
 * @property string $config_hidden
 * @property string $config_disabled
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig whereConfigId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig whereConfigName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig whereConfigValue($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig whereConfigDefault($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig whereConfigDescr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig whereConfigGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig whereConfigGroupOrder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig whereConfigSubGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig whereConfigSubGroupOrder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig whereConfigHidden($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig whereConfigDisabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig key($key)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DbConfig exactKey($key)
 */
	class DbConfig extends \Eloquent {}
}

