<?php
// This file was auto-generated from sdk-root/src/data/ec2/2016-04-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'InstanceExists' => [ 'delay' => 5, 'maxAttempts' => 40, 'operation' => 'DescribeInstances', 'acceptors' => [ [ 'matcher' => 'path', 'expected' => true, 'argument' => 'length(Reservations[]) > `0`', 'state' => 'success', ], [ 'matcher' => 'error', 'expected' => 'InvalidInstanceID.NotFound', 'state' => 'retry', ], ], ], 'BundleTaskComplete' => [ 'delay' => 15, 'operation' => 'DescribeBundleTasks', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'complete', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'BundleTasks[].State', ], [ 'expected' => 'failed', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'BundleTasks[].State', ], ], ], 'ConversionTaskCancelled' => [ 'delay' => 15, 'operation' => 'DescribeConversionTasks', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'cancelled', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'ConversionTasks[].State', ], ], ], 'ConversionTaskCompleted' => [ 'delay' => 15, 'operation' => 'DescribeConversionTasks', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'completed', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'ConversionTasks[].State', ], [ 'expected' => 'cancelled', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'ConversionTasks[].State', ], [ 'expected' => 'cancelling', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'ConversionTasks[].State', ], ], ], 'ConversionTaskDeleted' => [ 'delay' => 15, 'operation' => 'DescribeConversionTasks', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'deleted', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'ConversionTasks[].State', ], ], ], 'CustomerGatewayAvailable' => [ 'delay' => 15, 'operation' => 'DescribeCustomerGateways', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'available', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'CustomerGateways[].State', ], [ 'expected' => 'deleted', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'CustomerGateways[].State', ], [ 'expected' => 'deleting', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'CustomerGateways[].State', ], ], ], 'ExportTaskCancelled' => [ 'delay' => 15, 'operation' => 'DescribeExportTasks', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'cancelled', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'ExportTasks[].State', ], ], ], 'ExportTaskCompleted' => [ 'delay' => 15, 'operation' => 'DescribeExportTasks', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'completed', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'ExportTasks[].State', ], ], ], 'ImageExists' => [ 'operation' => 'DescribeImages', 'maxAttempts' => 40, 'delay' => 15, 'acceptors' => [ [ 'matcher' => 'path', 'expected' => true, 'argument' => 'length(Images[]) > `0`', 'state' => 'success', ], [ 'matcher' => 'error', 'expected' => 'InvalidAMIID.NotFound', 'state' => 'retry', ], ], ], 'ImageAvailable' => [ 'operation' => 'DescribeImages', 'maxAttempts' => 40, 'delay' => 15, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'Images[].State', 'expected' => 'available', ], [ 'state' => 'failure', 'matcher' => 'pathAny', 'argument' => 'Images[].State', 'expected' => 'failed', ], ], ], 'InstanceRunning' => [ 'delay' => 15, 'operation' => 'DescribeInstances', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'running', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Reservations[].Instances[].State.Name', ], [ 'expected' => 'shutting-down', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Reservations[].Instances[].State.Name', ], [ 'expected' => 'terminated', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Reservations[].Instances[].State.Name', ], [ 'expected' => 'stopping', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Reservations[].Instances[].State.Name', ], [ 'matcher' => 'error', 'expected' => 'InvalidInstanceID.NotFound', 'state' => 'retry', ], ], ], 'InstanceStatusOk' => [ 'operation' => 'DescribeInstanceStatus', 'maxAttempts' => 40, 'delay' => 15, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'InstanceStatuses[].InstanceStatus.Status', 'expected' => 'ok', ], [ 'matcher' => 'error', 'expected' => 'InvalidInstanceID.NotFound', 'state' => 'retry', ], ], ], 'InstanceStopped' => [ 'delay' => 15, 'operation' => 'DescribeInstances', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'stopped', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Reservations[].Instances[].State.Name', ], [ 'expected' => 'pending', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Reservations[].Instances[].State.Name', ], [ 'expected' => 'terminated', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Reservations[].Instances[].State.Name', ], ], ], 'InstanceTerminated' => [ 'delay' => 15, 'operation' => 'DescribeInstances', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'terminated', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Reservations[].Instances[].State.Name', ], [ 'expected' => 'pending', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Reservations[].Instances[].State.Name', ], [ 'expected' => 'stopping', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Reservations[].Instances[].State.Name', ], ], ], 'KeyPairExists' => [ 'operation' => 'DescribeKeyPairs', 'delay' => 5, 'maxAttempts' => 6, 'acceptors' => [ [ 'expected' => true, 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'length(KeyPairs[].KeyName) > `0`', ], [ 'expected' => 'InvalidKeyPair.NotFound', 'matcher' => 'error', 'state' => 'retry', ], ], ], 'NatGatewayAvailable' => [ 'operation' => 'DescribeNatGateways', 'delay' => 15, 'maxAttempts' => 40, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'NatGateways[].State', 'expected' => 'available', ], [ 'state' => 'failure', 'matcher' => 'pathAny', 'argument' => 'NatGateways[].State', 'expected' => 'failed', ], [ 'state' => 'failure', 'matcher' => 'pathAny', 'argument' => 'NatGateways[].State', 'expected' => 'deleting', ], [ 'state' => 'failure', 'matcher' => 'pathAny', 'argument' => 'NatGateways[].State', 'expected' => 'deleted', ], [ 'state' => 'retry', 'matcher' => 'error', 'expected' => 'NatGatewayNotFound', ], ], ], 'NetworkInterfaceAvailable' => [ 'operation' => 'DescribeNetworkInterfaces', 'delay' => 20, 'maxAttempts' => 10, 'acceptors' => [ [ 'expected' => 'available', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'NetworkInterfaces[].Status', ], [ 'expected' => 'InvalidNetworkInterfaceID.NotFound', 'matcher' => 'error', 'state' => 'failure', ], ], ], 'PasswordDataAvailable' => [ 'operation' => 'GetPasswordData', 'maxAttempts' => 40, 'delay' => 15, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'length(PasswordData) > `0`', 'expected' => true, ], ], ], 'SnapshotCompleted' => [ 'delay' => 15, 'operation' => 'DescribeSnapshots', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'completed', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Snapshots[].State', ], ], ], 'SpotInstanceRequestFulfilled' => [ 'operation' => 'DescribeSpotInstanceRequests', 'maxAttempts' => 40, 'delay' => 15, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'SpotInstanceRequests[].Status.Code', 'expected' => 'fulfilled', ], [ 'state' => 'failure', 'matcher' => 'pathAny', 'argument' => 'SpotInstanceRequests[].Status.Code', 'expected' => 'schedule-expired', ], [ 'state' => 'failure', 'matcher' => 'pathAny', 'argument' => 'SpotInstanceRequests[].Status.Code', 'expected' => 'canceled-before-fulfillment', ], [ 'state' => 'failure', 'matcher' => 'pathAny', 'argument' => 'SpotInstanceRequests[].Status.Code', 'expected' => 'bad-parameters', ], [ 'state' => 'failure', 'matcher' => 'pathAny', 'argument' => 'SpotInstanceRequests[].Status.Code', 'expected' => 'system-error', ], ], ], 'SubnetAvailable' => [ 'delay' => 15, 'operation' => 'DescribeSubnets', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'available', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Subnets[].State', ], ], ], 'SystemStatusOk' => [ 'operation' => 'DescribeInstanceStatus', 'maxAttempts' => 40, 'delay' => 15, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'InstanceStatuses[].SystemStatus.Status', 'expected' => 'ok', ], ], ], 'VolumeAvailable' => [ 'delay' => 15, 'operation' => 'DescribeVolumes', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'available', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Volumes[].State', ], [ 'expected' => 'deleted', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Volumes[].State', ], ], ], 'VolumeDeleted' => [ 'delay' => 15, 'operation' => 'DescribeVolumes', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'deleted', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Volumes[].State', ], [ 'matcher' => 'error', 'expected' => 'InvalidVolume.NotFound', 'state' => 'success', ], ], ], 'VolumeInUse' => [ 'delay' => 15, 'operation' => 'DescribeVolumes', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'in-use', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Volumes[].State', ], [ 'expected' => 'deleted', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'Volumes[].State', ], ], ], 'VpcAvailable' => [ 'delay' => 15, 'operation' => 'DescribeVpcs', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'available', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'Vpcs[].State', ], ], ], 'VpcExists' => [ 'operation' => 'DescribeVpcs', 'delay' => 1, 'maxAttempts' => 5, 'acceptors' => [ [ 'matcher' => 'status', 'expected' => 200, 'state' => 'success', ], [ 'matcher' => 'error', 'expected' => 'InvalidVpcID.NotFound', 'state' => 'retry', ], ], ], 'VpnConnectionAvailable' => [ 'delay' => 15, 'operation' => 'DescribeVpnConnections', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'available', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'VpnConnections[].State', ], [ 'expected' => 'deleting', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'VpnConnections[].State', ], [ 'expected' => 'deleted', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'VpnConnections[].State', ], ], ], 'VpnConnectionDeleted' => [ 'delay' => 15, 'operation' => 'DescribeVpnConnections', 'maxAttempts' => 40, 'acceptors' => [ [ 'expected' => 'deleted', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'VpnConnections[].State', ], [ 'expected' => 'pending', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'VpnConnections[].State', ], ], ], 'VpcPeeringConnectionExists' => [ 'delay' => 15, 'operation' => 'DescribeVpcPeeringConnections', 'maxAttempts' => 40, 'acceptors' => [ [ 'matcher' => 'status', 'expected' => 200, 'state' => 'success', ], [ 'matcher' => 'error', 'expected' => 'InvalidVpcPeeringConnectionID.NotFound', 'state' => 'retry', ], ], ], ],];
