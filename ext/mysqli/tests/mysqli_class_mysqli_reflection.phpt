--TEST--
Interface of the class mysqli - Reflection
--SKIPIF--
<?php
require_once('skipif.inc');
require_once('skipifemb.inc');
require_once('connect.inc');

if (($tmp = substr(PHP_VERSION, 0, strpos(PHP_VERSION, '.'))) && ($tmp < 5))
	die("skip Reflection not available before PHP 5 (found PHP $tmp)");
/*
Let's not deal with cross-version issues in the EXPECTF/UEXPECTF.
Most of the things which we test are covered by mysqli_class_*_interface.phpt.
Those tests go into the details and are aimed to be a development tool, no more.
*/
if (!$IS_MYSQLND)
	die("skip Test has been written for the latest version of mysqlnd only");
if ($MYSQLND_VERSION < 50004)
	die("skip Test requires mysqlnd Revision 5.0.4 or newer");

?>
--FILE--
<?php
	require_once('reflection_tools.inc');
	$class = new ReflectionClass('mysqli');
	inspectClass($class);
	print "done!\n";
?>
--EXPECTF--
Inspecting class 'mysqli'
isInternal: yes
isUserDefined: no
isInstantiable: yes
isInterface: no
isAbstract: no
isFinal: no
isIteratable: no
Modifiers: '0'
Parent Class: ''
Extension: 'mysqli'

Inspecting method 'mysqli'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: yes
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 8448
Number of Parameters: 6
Number of Required Parameters: 0

Inspecting parameter 'host' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'user' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'password' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'database' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'port' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'socket' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting method 'autocommit'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'mode' of method 'autocommit'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'change_user'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 3
Number of Required Parameters: 3

Inspecting parameter 'user' of method 'change_user'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting parameter 'password' of method 'change_user'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting parameter 'database' of method 'change_user'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'character_set_name'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'client_encoding'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'close'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'commit'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'connect'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 6
Number of Required Parameters: 0

Inspecting parameter 'host' of method 'connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'user' of method 'connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'password' of method 'connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'database' of method 'connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'port' of method 'connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'socket' of method 'connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting method 'debug'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'debug_options' of method 'debug'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'dump_debug_info'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'escape_string'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'string_to_escape' of method 'escape_string'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'get_charset'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'get_client_info'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'get_connection_stats'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'get_server_info'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'get_warnings'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'init'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'kill'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'connection_id' of method 'kill'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'more_results'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'multi_query'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'query' of method 'multi_query'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'mysqli'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: yes
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 8448
Number of Parameters: 6
Number of Required Parameters: 0

Inspecting parameter 'host' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'user' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'password' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'database' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'port' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'socket' of method 'mysqli'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting method 'next_result'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'options'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 2
Number of Required Parameters: 2

Inspecting parameter 'option' of method 'options'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting parameter 'value' of method 'options'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'ping'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'prepare'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'query' of method 'prepare'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'query'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'query' of method 'query'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'real_connect'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 7
Number of Required Parameters: 0

Inspecting parameter 'host' of method 'real_connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'user' of method 'real_connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'password' of method 'real_connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'database' of method 'real_connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'port' of method 'real_connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'socket' of method 'real_connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting parameter 'flags' of method 'real_connect'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: yes
isDefaultValueAvailable: no

Inspecting method 'real_escape_string'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'string_to_escape' of method 'real_escape_string'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'real_query'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'query' of method 'real_query'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'reap_async_query'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'refresh'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'options' of method 'refresh'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'rollback'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'select_db'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'database' of method 'select_db'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'set_charset'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 1
Number of Required Parameters: 1

Inspecting parameter 'charset' of method 'set_charset'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'set_opt'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 2
Number of Required Parameters: 2

Inspecting parameter 'option' of method 'set_opt'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting parameter 'value' of method 'set_opt'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'ssl_set'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 5
Number of Required Parameters: 5

Inspecting parameter 'key' of method 'ssl_set'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting parameter 'cert' of method 'ssl_set'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting parameter 'certificate_authority' of method 'ssl_set'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting parameter 'certificate_authority_path' of method 'ssl_set'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting parameter 'cipher' of method 'ssl_set'
isArray: no
allowsNull: no
isPassedByReference: no
isOptional: no
isDefaultValueAvailable: no

Inspecting method 'stat'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'stmt_init'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'store_result'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'thread_safe'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting method 'use_result'
isFinal: no
isAbstract: no
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isConstructor: no
isDestructor: no
isInternal: yes
isUserDefined: no
returnsReference: no
Modifiers: 256
Number of Parameters: 0
Number of Required Parameters: 0

Inspecting property 'affected_rows'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'client_info'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'client_version'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'connect_errno'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'connect_error'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'errno'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'error'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'field_count'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'host_info'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'info'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'insert_id'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'protocol_version'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'server_info'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'server_version'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'sqlstate'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'thread_id'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256

Inspecting property 'warning_count'
isPublic: yes
isPrivate: no
isProtected: no
isStatic: no
isDefault: yes
Modifiers: 256
Default property 'affected_rows'
Default property 'client_info'
Default property 'client_version'
Default property 'connect_errno'
Default property 'connect_error'
Default property 'errno'
Default property 'error'
Default property 'field_count'
Default property 'host_info'
Default property 'info'
Default property 'insert_id'
Default property 'protocol_version'
Default property 'server_info'
Default property 'server_version'
Default property 'sqlstate'
Default property 'thread_id'
Default property 'warning_count'
done!