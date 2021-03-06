<?php $refactor = array (
  'Phalcon_Acl_Adapter_Memory' => 
  array (
    'description' => 'Manages ACL lists in memory',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'setDefaultAction' => 
      array (
        'description' => 'Sets the default access level (Phalcon_Acl::ALLOW or Phalcon_Acl::DENY)',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$defaultAccess' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getDefaultAction' => 
      array (
        'description' => 'Returns the default ACL access level',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'addRole' => 
      array (
        'description' => 'Adds a role to the ACL list. Second parameter lets to inherit access data from other existing role
 Example:
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">addRole</span>(<span class="keyword operator">new</span> <span class="identifier">Phalcon_Acl_Role</span>(<span class="string">\'administrator\'</span>), <span class="string">\'consultor\'</span>);</pre>
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">addRole</span>(<span class="string">\'administrator\'</span>, <span class="string">\'consultor\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$roleObject' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$accessInherits' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'addInherit' => 
      array (
        'description' => 'Do a role inherit from another existing role',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$roleName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$roleToInherit' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'isRole' => 
      array (
        'description' => 'Check whether role exist in the roles list',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$roleName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'isResource' => 
      array (
        'description' => 'Check whether resource exist in the resources list',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$resourceName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'addResource' => 
      array (
        'description' => 'Adds a resource to the ACL list
 Access names can be a particular action, by example
 search, update, delete, etc or a list of them
 Example:
 <pre class="source-code iphp"><span class="comment">//Add a resource to the the list allowing access to an action
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">addResource</span>(<span class="keyword operator">new</span> <span class="identifier">Phalcon_Acl_Resource</span>(<span class="string">\'customers\'</span>), <span class="string">\'search\'</span>);
 <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">addResource</span>(<span class="string">\'customers\'</span>, <span class="string">\'search\'</span>);
 <span class="comment">//Add a resource  with an access list
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">addResource</span>(<span class="keyword operator">new</span> <span class="identifier">Phalcon_Acl_Resource</span>(<span class="string">\'customers\'</span>), <span class="keyword builtin">array</span>(<span class="string">\'create\'</span>, <span class="string">\'search\'</span>));
 <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">addResource</span>(<span class="string">\'customers\'</span>, <span class="keyword builtin">array</span>(<span class="string">\'create\'</span>, <span class="string">\'search\'</span>));</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$resource' => 
          array (
            'type' => 'Phalcon_Acl_Resource',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$accessList' => 
          array (
            'type' => 'unknown',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'addResourceAccess' => 
      array (
        'description' => 'Adds access to resources',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$resourceName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$accessList' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'dropResourceAccess' => 
      array (
        'description' => 'Removes an access from a resource',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$resourceName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$accessList' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_allowOrDeny' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$roleName' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$resourceName' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$access' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$action' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'allow' => 
      array (
        'description' => 'Allow access to a role on a resource
 You can use \'*\' as wildcard
 Ej:
 <pre class="source-code iphp"><span class="comment">//Allow access to guests to search on customers
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">allow</span>(<span class="string">\'guests\'</span>, <span class="string">\'customers\'</span>, <span class="string">\'search\'</span>);
 <span class="comment">//Allow access to guests to search or create on customers
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">allow</span>(<span class="string">\'guests\'</span>, <span class="string">\'customers\'</span>, <span class="keyword builtin">array</span>(<span class="string">\'search\'</span>, <span class="string">\'create\'</span>));
 <span class="comment">//Allow access to any role to browse on products
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">allow</span>(<span class="string">\'*\'</span>, <span class="string">\'products\'</span>, <span class="string">\'browse\'</span>);
 <span class="comment">//Allow access to any role to browse on any resource
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">allow</span>(<span class="string">\'*\'</span>, <span class="string">\'*\'</span>, <span class="string">\'browse\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$roleName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$resourceName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$access' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'deny' => 
      array (
        'description' => 'Deny access to a role on a resource
 You can use \'*\' as wildcard
 Ej:
 <pre class="source-code iphp"><span class="comment">//Deny access to guests to search on customers
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">deny</span>(<span class="string">\'guests\'</span>, <span class="string">\'customers\'</span>, <span class="string">\'search\'</span>);
 <span class="comment">//Deny access to guests to search or create on customers
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">deny</span>(<span class="string">\'guests\'</span>, <span class="string">\'customers\'</span>, <span class="keyword builtin">array</span>(<span class="string">\'search\'</span>, <span class="string">\'create\'</span>));
 <span class="comment">//Deny access to any role to browse on products
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">deny</span>(<span class="string">\'*\'</span>, <span class="string">\'products\'</span>, <span class="string">\'browse\'</span>);
 <span class="comment">//Deny access to any role to browse on any resource
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">deny</span>(<span class="string">\'*\'</span>, <span class="string">\'*\'</span>, <span class="string">\'browse\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$roleName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$resourceName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$access' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'isAllowed' => 
      array (
        'description' => 'Check whether a role is allowed to access an action from a resource
 <pre class="source-code iphp"><span class="comment">//Does andres have access to the customers resource to create?
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">isAllowed</span>(<span class="string">\'andres\'</span>, <span class="string">\'Products\'</span>, <span class="string">\'create\'</span>);
 <span class="comment">//Do guests have access to any resource to edit?
</span> <span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">isAllowed</span>(<span class="string">\'guests\'</span>, <span class="string">\'*\'</span>, <span class="string">\'edit\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$role' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$resource' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$access' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      '_rebuildAccessList' => 
      array (
        'description' => 'Rebuild the list of access from the inherit lists',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Acl_Exception' => 
  array (
    'description' => 'Class for exceptions thrown by Phalcon_Acl',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Acl_Resource' => 
  array (
    'description' => 'This class defines resource entity and its description',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Acl_Resource description',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$description' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getName' => 
      array (
        'description' => 'Returns the resource name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getDescription' => 
      array (
        'description' => 'Returns resource description',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Acl_Role' => 
  array (
    'description' => 'This class defines role entity and its description',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Acl_Role description',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$description' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => '',
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getName' => 
      array (
        'description' => 'Returns the role name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getDescription' => 
      array (
        'description' => 'Returns role description',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Acl' => 
  array (
    'description' => 'This component allows to manage ACL lists. An access control list (ACL) is a list
 of permissions attached to an object. An ACL specifies which users or system processes
 are granted access to objects, as well as what operations are allowed on given objects.

<pre class="source-code iphp"><span class="tag">$<span class="identifier">acl</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Acl</span>(<span class="string">\'Memory\'</span>);

 <span class="comment">//Default action is deny access
</span><span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">setDefaultAction</span>(<span class="identifier">Phalcon_Acl</span>::<span class="identifier">DENY</span>);

 <span class="comment">//Create some roles
</span><span class="tag">$<span class="identifier">roleAdmins</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Acl_Role</span>(<span class="string">\'Administrators\'</span>, <span class="string">\'Super-User role\'</span>);
<span class="tag">$<span class="identifier">roleGuests</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Acl_Role</span>(<span class="string">\'Guests\'</span>);

 <span class="comment">//Add "Guests" role to acl
</span><span class="identifier">acl</span>-&gt;<span class="identifier">addRole</span>(<span class="tag">$<span class="identifier">roleGuests</span></span>);

 <span class="comment">//Add "Designers" role to acl
</span><span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">addRole</span>(<span class="string">\'Designers\'</span>));

 <span class="comment">//Define the "Customers" resource
</span><span class="tag">$<span class="identifier">customersResource</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Acl_Resource</span>(<span class="string">\'Customers\'</span>, <span class="string">\'Customers management\'</span>);

 <span class="comment">//Add "customers" resource with a couple of operations
</span><span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">addResource</span>(<span class="tag">$<span class="identifier">customersResource</span></span>, <span class="string">\'search\'</span>);
<span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">addResource</span>(<span class="tag">$<span class="identifier">customersResource</span></span>, <span class="keyword builtin">array</span>(<span class="string">\'create\'</span>, <span class="string">\'update\'</span>));

 <span class="comment">//Set access level for roles into resources
</span><span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">allow</span>(<span class="string">\'Guests\'</span>, <span class="string">\'Customers\'</span>, <span class="string">\'search\'</span>);
<span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">allow</span>(<span class="string">\'Guests\'</span>, <span class="string">\'Customers\'</span>, <span class="string">\'create\'</span>);
<span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">deny</span>(<span class="string">\'Guests\'</span>, <span class="string">\'Customers\'</span>, <span class="string">\'update\'</span>);

 <span class="comment">//Check whether role has access to the operations
</span><span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">isAllowed</span>(<span class="string">\'Guests\'</span>, <span class="string">\'Customers\'</span>, <span class="string">\'edit\'</span>) <span class="comment">//Returns 0
</span><span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">isAllowed</span>(<span class="string">\'Guests\'</span>, <span class="string">\'Customers\'</span>, <span class="string">\'search\'</span>); <span class="comment">//Returns 1
</span><span class="tag">$<span class="identifier">acl</span></span>-&gt;<span class="identifier">isAllowed</span>(<span class="string">\'Guests\'</span>, <span class="string">\'Customers\'</span>, <span class="string">\'create\'</span>); //<span class="identifier">Returns</span> <span class="number">1</span></pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
      'ALLOW' => 1,
      'DENY' => 0,
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Acl Constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$adapterName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => 'Memory',
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '__call' => 
      array (
        'description' => 'Pass any call to the internal adapter object',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$method' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$arguments' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
    ),
  ),
  'Phalcon_Cache_Backend_Apc' => 
  array (
    'description' => 'Allows to cache output fragments, PHP data and raw data using a memcache backend

<pre class="source-code iphp"><span class="comment">//Cache data for 2 days
</span><span class="tag">$<span class="identifier">frontendOptions</span></span> = <span class="keyword builtin">array</span>(
	<span class="string">\'lifetime\'</span> =&gt; <span class="number">172800</span>
);

<span class="tag">$<span class="identifier">cache</span></span> = <span class="identifier">Phalcon_Cache</span>::<span class="identifier">factory</span>(<span class="string">\'Data\'</span>, <span class="string">\'Apc\'</span>, <span class="tag">$<span class="identifier">frontendOptions</span></span>, <span class="keyword builtin">array</span>());

 <span class="comment">//Cache arbitrary data
</span><span class="tag">$<span class="identifier">cache</span></span>-&gt;<span class="identifier">store</span>(<span class="string">\'my-data\'</span>, <span class="keyword builtin">array</span>(<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>));

 <span class="comment">//Get data
</span><span class="tag">$<span class="identifier">data</span></span> = <span class="tag">$<span class="identifier">cache</span></span>-&gt;<span class="identifier">get</span>(<span class="string">\'my-data\'</span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'get' => 
      array (
        'description' => 'Returns a cached content',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$keyName' => 
          array (
            'type' => 'int|string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$lifetime' => 
          array (
            'type' => 'long',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'save' => 
      array (
        'description' => 'Stores cached content into the file backend',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$keyName' => 
          array (
            'type' => 'int|string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$content' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$lifetime' => 
          array (
            'type' => 'long',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$stopBuffer' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => true,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'delete' => 
      array (
        'description' => 'Deletes a value from the cache by its key',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$keyName' => 
          array (
            'type' => 'string|int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'queryKeys' => 
      array (
        'description' => 'Query the existing cached keys',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$prefix' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => '',
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
    ),
  ),
  'Phalcon_Cache_Backend_File' => 
  array (
    'description' => 'Allows to cache output fragments using a file backend

<pre class="source-code iphp"><span class="comment">//Cache the file for 2 days
</span><span class="tag">$<span class="identifier">frontendOptions</span></span> = <span class="keyword builtin">array</span>(
	<span class="string">\'lifetime\'</span> =&gt; <span class="number">172800</span>
);

 <span class="comment">//Set the cache directory
</span><span class="tag">$<span class="identifier">backendOptions</span></span> = <span class="keyword builtin">array</span>(
	<span class="string">\'cacheDir\'</span> =&gt; <span class="string">\'../app/cache/\'</span>
);

<span class="tag">$<span class="identifier">cache</span></span> = <span class="identifier">Phalcon_Cache</span>::<span class="identifier">factory</span>(<span class="string">\'Output\'</span>, <span class="string">\'File\'</span>, <span class="tag">$<span class="identifier">frontendOptions</span></span>, <span class="tag">$<span class="identifier">backendOptions</span></span>);

<span class="tag">$<span class="identifier">content</span></span> = <span class="tag">$<span class="identifier">cache</span></span>-&gt;<span class="identifier">start</span>(<span class="string">\'my-cache\'</span>);
<span class="keyword">if</span>(<span class="tag">$<span class="identifier">content</span></span>===<span class="keyword literal">null</span>){
  <span class="keyword builtin">echo</span> <span class="string">\'&lt;h1&gt;\'</span>, <span class="identifier">time</span>(), <span class="string">\'&lt;/h1&gt;\'</span>;
  <span class="tag">$<span class="identifier">cache</span></span>-&gt;<span class="identifier">save</span>();
} <span class="keyword">else</span> {
	<span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">content</span></span>;
}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Backend_Adapter_File constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$frontendObject' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$backendOptions' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'get' => 
      array (
        'description' => 'Returns a cached content',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$keyName' => 
          array (
            'type' => 'int|string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$lifetime' => 
          array (
            'type' => 'long',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'save' => 
      array (
        'description' => 'Stores cached content into the file backend',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$keyName' => 
          array (
            'type' => 'int|string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$content' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$lifetime' => 
          array (
            'type' => 'long',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$stopBuffer' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => true,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'delete' => 
      array (
        'description' => 'Deletes a value from the cache by its key',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$keyName' => 
          array (
            'type' => 'int|string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'queryKeys' => 
      array (
        'description' => 'Query the existing cached keys',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$prefix' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
    ),
  ),
  'Phalcon_Cache_Backend_Memcache' => 
  array (
    'description' => 'Allows to cache output fragments, PHP data or raw data to a memcache backend

 This adapter uses the special memcached key "_PHCM" to store all the keys internally used by the adapter

<pre class="source-code iphp"><span class="comment">//Cache data for 2 days
</span><span class="tag">$<span class="identifier">frontendOptions</span></span> = <span class="keyword builtin">array</span>(
	<span class="string">\'lifetime\'</span> =&gt; <span class="number">172800</span>
);

 <span class="comment">//Set memcached server connection settings
</span><span class="tag">$<span class="identifier">backendOptions</span></span> = <span class="keyword builtin">array</span>(
	<span class="string">\'host\'</span> =&gt; <span class="string">\'localhost\'</span>,
  <span class="string">\'port\'</span> =&gt; <span class="number">11211</span>,
  <span class="string">\'persistent\'</span> =&gt; <span class="keyword literal">false</span>
);

<span class="tag">$<span class="identifier">cache</span></span> = <span class="identifier">Phalcon_Cache</span>::<span class="identifier">factory</span>(<span class="string">\'Data\'</span>, <span class="string">\'Memcache\'</span>, <span class="tag">$<span class="identifier">frontendOptions</span></span>, <span class="tag">$<span class="identifier">backendOptions</span></span>);

 <span class="comment">//Cache arbitrary data
</span><span class="tag">$<span class="identifier">cache</span></span>-&gt;<span class="identifier">store</span>(<span class="string">\'my-data\'</span>, <span class="keyword builtin">array</span>(<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>));

 <span class="comment">//Get data
</span><span class="tag">$<span class="identifier">data</span></span> = <span class="tag">$<span class="identifier">cache</span></span>-&gt;<span class="identifier">get</span>(<span class="string">\'my-data\'</span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Backend_Adapter_Memcache constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$frontendObject' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$backendOptions' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_connect' => 
      array (
        'description' => 'Create internal connection to memcached',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'get' => 
      array (
        'description' => 'Returns a cached content',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$keyName' => 
          array (
            'type' => 'int|string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$lifetime' => 
          array (
            'type' => 'long',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'save' => 
      array (
        'description' => 'Stores cached content into the file backend',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$keyName' => 
          array (
            'type' => 'int|string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$content' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$lifetime' => 
          array (
            'type' => 'long',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$stopBuffer' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => true,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'delete' => 
      array (
        'description' => 'Deletes a value from the cache by its key',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$keyName' => 
          array (
            'type' => 'int|string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'queryKeys' => 
      array (
        'description' => 'Query the existing cached keys',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$prefix' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      '__destruct' => 
      array (
        'description' => 'Destructs the backend closing the memcached connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Cache_Backend' => 
  array (
    'description' => 'This class implements common functionality for backend adapters. All the backend cache adapter must
 extend this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'abstract',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Cache_Backend constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$frontendObject' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$backendOptions' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'start' => 
      array (
        'description' => 'Starts a cache. The $keyname allow to identify the created fragment',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$keyName' => 
          array (
            'type' => 'int|string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'getFrontend' => 
      array (
        'description' => 'Returns front-end instance adapter related to the back-end',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'mixed',
      ),
      'isFresh' => 
      array (
        'description' => 'Checks whether the last cache is fresh or cached',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'isStarted' => 
      array (
        'description' => 'Checks whether the cache has started buffering or not',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getLastKey' => 
      array (
        'description' => 'Gets the last key stored by the cache',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Cache_Exception' => 
  array (
    'description' => 'Exceptions thrown in Phalcon_Cache will use this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Cache_Frontend_Data' => 
  array (
    'description' => 'Allows to cache native PHP data in a serialized form',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Cache_Frontend_Data constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$frontendOptions' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getLifetime' => 
      array (
        'description' => 'Returns cache lifetime',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'integer',
      ),
      'isBuffering' => 
      array (
        'description' => 'Check whether if frontend is buffering output',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'start' => 
      array (
        'description' => 'Starts output frontend. Actually, does nothing',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'getContent' => 
      array (
        'description' => 'Returns output cached content',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'stop' => 
      array (
        'description' => 'Stops output frontend',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'beforeStore' => 
      array (
        'description' => 'Serializes data before storing it',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'afterRetrieve' => 
      array (
        'description' => 'Unserializes data after retrieving it',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Cache_Frontend_None' => 
  array (
    'description' => 'Discards any kind of frontend data input. This frontend does not have expiration time or any other options',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Cache_Frontend_None constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$frontendOptions' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getLifetime' => 
      array (
        'description' => 'Returns cache lifetime, always one second expiring content',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'isBuffering' => 
      array (
        'description' => 'Check whether if frontend is buffering output, always false',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'start' => 
      array (
        'description' => 'Starts output frontend',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'getContent' => 
      array (
        'description' => 'Returns output cached content',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'stop' => 
      array (
        'description' => 'Stops output frontend',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'beforeStore' => 
      array (
        'description' => 'Prepare data to be stored',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'afterRetrieve' => 
      array (
        'description' => 'Prepares data to be retrieved to user',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Cache_Frontend_Output' => 
  array (
    'description' => 'Allows to cache output fragments captured with ob_* functions',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Cache_Frontend_Output constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$frontendOptions' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getLifetime' => 
      array (
        'description' => 'Returns cache lifetime',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'integer',
      ),
      'isBuffering' => 
      array (
        'description' => 'Check whether if frontend is buffering output',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'start' => 
      array (
        'description' => 'Starts output frontend',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'getContent' => 
      array (
        'description' => 'Returns output cached content',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'stop' => 
      array (
        'description' => 'Stops output frontend',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'beforeStore' => 
      array (
        'description' => 'Prepare data to be stored',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'afterRetrieve' => 
      array (
        'description' => 'Prepares data to be retrieved to user',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Cache' => 
  array (
    'description' => 'Phalcon_Cache can be used to cache output fragments, PHP data and raw data in order to improve performance

<pre class="source-code iphp"><span class="comment">//Cache the file for 2 days
</span><span class="tag">$<span class="identifier">frontendOptions</span></span> = <span class="keyword builtin">array</span>(
  <span class="string">\'lifetime\'</span> =&gt; <span class="number">172800</span>
);

 <span class="comment">//Set the cache directory
</span><span class="tag">$<span class="identifier">backendOptions</span></span> = <span class="keyword builtin">array</span>(
  <span class="string">\'cacheDir\'</span> =&gt; <span class="string">\'../app/cache/\'</span>
);

<span class="tag">$<span class="identifier">cache</span></span> = <span class="identifier">Phalcon_Cache</span>::<span class="identifier">factory</span>(<span class="string">\'Output\'</span>, <span class="string">\'File\'</span>, <span class="tag">$<span class="identifier">frontendOptions</span></span>, <span class="tag">$<span class="identifier">backendOptions</span></span>);

<span class="tag">$<span class="identifier">content</span></span> = <span class="tag">$<span class="identifier">cache</span></span>-&gt;<span class="identifier">start</span>(<span class="string">\'my-cache\'</span>);
<span class="keyword">if</span>(<span class="tag">$<span class="identifier">content</span></span>===<span class="keyword literal">null</span>){
  <span class="keyword builtin">echo</span> <span class="identifier">time</span>();
  <span class="tag">$<span class="identifier">cache</span></span>-&gt;<span class="identifier">save</span>();
} <span class="keyword">else</span> {
  <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">content</span></span>;
}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'factory' => 
      array (
        'description' => 'Factories different caches backends from their adapters',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$frontendAdapter' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$backendAdapter' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$frontendOptions' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
          '$backendOptions' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Cache_Backend_File',
      ),
    ),
  ),
  'Phalcon_Config_Adapter_Ini' => 
  array (
    'description' => 'Reads ini files and convert it to Phalcon_Config objects.

 Given the next configuration file:

 <pre class="source-code iphp">[<span class="identifier">database</span>]
<span class="identifier">adapter</span> = <span class="identifier">Mysql</span>
<span class="identifier">host</span> = <span class="identifier">localhost</span>
<span class="identifier">username</span> = <span class="identifier">scott</span>
<span class="identifier">password</span> = <span class="identifier">cheetah</span>
<span class="identifier">name</span> = <span class="identifier">test_db</span>

[<span class="identifier">phalcon</span>]
<span class="identifier">controllersDir</span> = <span class="string">"../app/controllers/"</span>
<span class="identifier">modelsDir</span> = <span class="string">"../app/models/"</span>
<span class="identifier">viewsDir</span> = <span class="string">"../app/views/"</span></pre>

 You can read it as follows:

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">config</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Config_Adapter_Ini</span>(<span class="string">"path/config.ini"</span>)

 <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">phalcon</span>-&gt;<span class="identifier">controllersDir</span>;
 <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">database</span>-&gt;<span class="identifier">username</span>;</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Config_Adapter_Ini constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$filePath' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Config_Adapter_Ini',
      ),
    ),
  ),
  'Phalcon_Config_Exception' => 
  array (
    'description' => 'Exceptions thrown in Phalcon_Config will use this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Config' => 
  array (
    'description' => 'Phalcon_Config is designed to simplify the access to, and the use of, configuration data within applications.
 It provides a nested object property based user interface for accessing this configuration data within
 application code.

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">config</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Config</span>(<span class="keyword builtin">array</span>(
  <span class="string">"database"</span> =&gt; <span class="keyword builtin">array</span>(
    <span class="string">"adapter"</span> =&gt; <span class="string">"Mysql"</span>,
    <span class="string">"host"</span> =&gt; <span class="string">"localhost"</span>,
    <span class="string">"username"</span> =&gt; <span class="string">"scott"</span>,
    <span class="string">"password"</span> =&gt; <span class="string">"cheetah"</span>,
    <span class="string">"name"</span> =&gt; <span class="string">"test_db"</span>
  ),
  <span class="string">"phalcon"</span> =&gt; <span class="keyword builtin">array</span>(
    <span class="string">"controllersDir"</span> =&gt; <span class="string">"../app/controllers/"</span>,
    <span class="string">"modelsDir"</span> =&gt; <span class="string">"../app/models/"</span>,
    <span class="string">"viewsDir"</span> =&gt; <span class="string">"../app/views/"</span>
  )
 ));</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Config constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$arrayConfig' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Config',
      ),
    ),
  ),
  'Phalcon_Controller_Front' => 
  array (
    'description' => 'Phalcon_Controller_Front implements a "Front Controller" pattern used in "Model-View-Controller" (MVC) applications.
 Its purpose is to initialize the request environment, route the incoming request, and then dispatch
 any discovered actions; it aggregates any responses and returns them when the process is complete

<pre class="source-code iphp"><span class="keyword">try</span> {

  <span class="tag">$<span class="identifier">front</span></span> = <span class="identifier">Phalcon_Controller_Front</span>::<span class="identifier">getInstance</span>();

  <span class="comment">//Setting directories
</span>  <span class="tag">$<span class="identifier">front</span></span>-&gt;<span class="identifier">setControllersDir</span>(<span class="string">"../app/controllers/"</span>);
  <span class="tag">$<span class="identifier">front</span></span>-&gt;<span class="identifier">setModelsDir</span>(<span class="string">"../app/models/"</span>);
  <span class="tag">$<span class="identifier">front</span></span>-&gt;<span class="identifier">setViewsDir</span>(<span class="string">"../app/views/"</span>);

  <span class="comment">//Get response
</span>  <span class="tag">$<span class="identifier">response</span></span> = <span class="tag">$<span class="identifier">front</span></span>-&gt;<span class="identifier">dispatchLoop</span>();

  <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">response</span></span>-&gt;<span class="identifier">send</span>();

 }
 <span class="keyword">catch</span>(<span class="identifier">Phalcon_Exception</span> <span class="tag">$<span class="identifier">e</span></span>){
  <span class="keyword builtin">echo</span> <span class="string">"PhalconException: "</span>, <span class="tag">$<span class="identifier">e</span></span>-&gt;<span class="identifier">getMessage</span>();
 }</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'setConfig' => 
      array (
        'description' => 'Modifies multipe general settings using a Phalcon_Config object or a stdClass filled with parameters
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">config</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Config</span>(<span class="keyword builtin">array</span>(
  <span class="string">"database"</span> =&gt; <span class="keyword builtin">array</span>(
    <span class="string">"adapter"</span> =&gt; <span class="string">"Mysql"</span>,
    <span class="string">"host"</span> =&gt; <span class="string">"localhost"</span>,
    <span class="string">"username"</span> =&gt; <span class="string">"scott"</span>,
    <span class="string">"password"</span> =&gt; <span class="string">"cheetah"</span>,
    <span class="string">"name"</span> =&gt; <span class="string">"test_db"</span>
  ),
  <span class="string">"phalcon"</span> =&gt; <span class="keyword builtin">array</span>(
    <span class="string">"controllersDir"</span> =&gt; <span class="string">"../app/controllers/"</span>,
    <span class="string">"modelsDir"</span> =&gt; <span class="string">"../app/models/"</span>,
    <span class="string">"viewsDir"</span> =&gt; <span class="string">"../app/views/"</span>
  )
 ));
 <span class="tag">$<span class="identifier">front</span></span>-&gt;<span class="identifier">setConfig</span>(<span class="tag">$<span class="identifier">config</span></span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$config' => 
          array (
            'type' => 'stdClass',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setDatabaseConfig' => 
      array (
        'description' => 'Sets the database default settings',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$database' => 
          array (
            'type' => 'stdClass',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setControllersDir' => 
      array (
        'description' => 'Sets controllers directory. Depending of your platform, always add a trailing slash or backslash
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">front</span></span>-&gt;<span class="identifier">setControllersDir</span>(<span class="string">"../app/controllers/"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$controllersDir' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setModelsDir' => 
      array (
        'description' => 'Sets models directory. Depending of your platform, always add a trailing slash or backslash
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">front</span></span>-&gt;<span class="identifier">setModelsDir</span>(<span class="string">"../app/models/"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$modelsDir' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setViewsDir' => 
      array (
        'description' => 'Sets views directory. Depending of your platform, always add a trailing slash or backslash
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">front</span></span>-&gt;<span class="identifier">setViewsDir</span>(<span class="string">"../app/views/"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$viewsDir' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setRouter' => 
      array (
        'description' => 'Replaces the default router with a predefined object
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">router</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Router_Rewrite</span>();
 <span class="tag">$<span class="identifier">router</span></span>-&gt;<span class="identifier">handle</span>();
 <span class="tag">$<span class="identifier">front</span></span>-&gt;<span class="identifier">setRouter</span>(<span class="tag">$<span class="identifier">router</span></span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$router' => 
          array (
            'type' => 'Phalcon_Router',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getRouter' => 
      array (
        'description' => 'Return active router',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Router',
      ),
      'setDispatcher' => 
      array (
        'description' => 'Replaces the default dispatcher with a predefined object',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$dispatcher' => 
          array (
            'type' => 'Phalcon_Dispatcher',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getDispatcher' => 
      array (
        'description' => 'Return active Dispatcher',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Dispatcher',
      ),
      'setBaseUri' => 
      array (
        'description' => 'Sets external uri which app is executed',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$baseUri' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getBaseUri' => 
      array (
        'description' => 'Gets external uri where app is executed',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setBasePath' => 
      array (
        'description' => 'Sets local path where app/ directory is located. Depending of your platform, always add a trailing slash or backslash',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$basePath' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getBasePath' => 
      array (
        'description' => 'Gets local path where app/ directory is located',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setRequest' => 
      array (
        'description' => 'Overwrites request object default object',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$request' => 
          array (
            'type' => 'Phalcon_Request',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setResponse' => 
      array (
        'description' => 'Overwrites response object default object',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$response' => 
          array (
            'type' => 'Phalcon_Response',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setModelComponent' => 
      array (
        'description' => 'Overwrites models manager default object',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Manager',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getModelComponent' => 
      array (
        'description' => 'Gets the models manager',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Model_Manager',
      ),
      'setViewComponent' => 
      array (
        'description' => 'Sets view component',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$view' => 
          array (
            'type' => 'Phalcon_View',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getViewComponent' => 
      array (
        'description' => 'Gets the views part manager',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_View',
      ),
      'dispatchLoop' => 
      array (
        'description' => 'Executes the dispatch loop',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_View',
      ),
      'getInstance' => 
      array (
        'description' => 'Gets Phalcon_Controller_Front singleton instance',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Controller_Front',
      ),
      'reset' => 
      array (
        'description' => 'Resets the internal singleton',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Controller' => 
  array (
    'description' => 'Every application controller should extend this class that encapsulates all the controller functionality

 The controllers provide the “flow” between models and views. Controllers are responsible
 for processing the incoming requests from the web browser, interrogating the models for data,
 and passing that data on to the views for presentation.

<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">PeopleController</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Controller</span> 
{

  <span class="comment">//This action will be executed by default
</span>  <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">indexAction</span>()
  {

  }

  <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">findAction</span>()
  {

  }

  <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">saveAction</span>()
  {
   <span class="comment">//Forwards flow to the index action
</span>   <span class="keyword">return</span> <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">_forward</span>(<span class="string">\'people/index\'</span>);
  }

  <span class="comment">//This action will be executed when a non existent action is requested
</span>  <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">notFoundAction</span>()
  {

  }

 }</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Constructor for Phalcon_Controller',
        'modifiers' => 
        array (
          0 => 'final',
          1 => 'public',
        ),
        'parameters' => 
        array (
          '$dispatcher' => 
          array (
            'type' => 'Phalcon_Dispatcher',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$request' => 
          array (
            'type' => 'Phalcon_Request',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$response' => 
          array (
            'type' => 'Phalcon_Response',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$view' => 
          array (
            'type' => 'Phalcon_View',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Manager',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_forward' => 
      array (
        'description' => 'Forwards execution flow to another controller/action.',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$uri' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_getParam' => 
      array (
        'description' => 'Returns a param from the dispatching params',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$index' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_setParam' => 
      array (
        'description' => 'Set a dispatching parameter',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$index' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '__get' => 
      array (
        'description' => 'Magic method __get',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$propertyName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Db_Adapter_Mysql' => 
  array (
    'description' => 'Phalcon_Db_Adapter_Mysql is the Phalcon_Db adapter for the MySQL database.
 <pre class="source-code iphp">#<span class="identifier">Setting</span> <span class="identifier">all</span> <span class="identifier">posible</span> <span class="identifier">parameters</span>
<span class="tag">$<span class="identifier">config</span></span> = <span class="keyword operator">new</span> <span class="identifier">stdClass</span>();
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">host</span> = <span class="string">\'localhost\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">username</span> = <span class="string">\'machine\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">password</span> = <span class="string">\'sigma\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">name</span> = <span class="string">\'swarm\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">charset</span> = <span class="string">\'utf8\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">collation</span> = <span class="string">\'utf8_unicode_ci\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">compression</span> = <span class="keyword literal">true</span>;

<span class="tag">$<span class="identifier">connection</span></span> = <span class="identifier">Phalcon_Db</span>::<span class="identifier">factory</span>(<span class="string">\'Mysql\'</span>, <span class="tag">$<span class="identifier">config</span></span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
      'DB_ASSOC' => 1,
      'DB_BOTH' => 2,
      'DB_NUM' => 3,
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Constructor for Phalcon_Db_Adapter_Mysql. This method does not should to be called directly. Use Phalcon_Db::factory instead',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$descriptor' => 
          array (
            'type' => 'stdClass',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'connect' => 
      array (
        'description' => 'This method is automatically called in Phalcon_Db_Mysql constructor.
 Call it when you need to restore a database connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$descriptor' => 
          array (
            'type' => 'stdClass',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'query' => 
      array (
        'description' => 'Sends SQL statements to the MySQL database server returning success state.
 When the SQL sent have returned any row, the result is a PHP resource.
 <pre class="source-code iphp"><span class="comment">//Inserting data
</span> <span class="tag">$<span class="identifier">success</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"INSERT INTO robots VALUES (1, \'Astro Boy\')"</span>);
 <span class="tag">$<span class="identifier">success</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"INSERT INTO robots VALUES (?, ?)"</span>, <span class="keyword builtin">array</span>(<span class="number">1</span>, <span class="string">\'Astro Boy\'</span>));
 <span class="comment">//Querying data
</span> <span class="tag">$<span class="identifier">resultset</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"SELECT * FROM robots WHERE type=\'mechanical\'"</span>);</pre>
 $resultset = $connection->query("SELECT * FROM robots WHERE type=?", array("mechanical"));</code>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlStatement' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Db_Result_Mysql|boolean',
      ),
      'affectedRows' => 
      array (
        'description' => 'Returns number of affected rows by the last INSERT/UPDATE/DELETE repoted by MySQL
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"DELETE FROM robots"</span>);
<span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">affectedRows</span>(), <span class="string">\' were deleted\'</span>;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'int',
      ),
      'close' => 
      array (
        'description' => 'Closes active connection returning success. Phalcon automatically closes and destroys active connections within Phalcon_Db_Pool',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getConnectionId' => 
      array (
        'description' => 'Gets the active connection unique identifier. A mysqli object',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$asString' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'escapeString' => 
      array (
        'description' => 'Escapes a value to avoid SQL injections',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$str' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'bindParams' => 
      array (
        'description' => 'Bind params to SQL select',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlSelect' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$params' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'error' => 
      array (
        'description' => 'Returns last error message from MySQL',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$errorString' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'noError' => 
      array (
        'description' => 'Returns last error code from MySQL',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$resultQuery' => 
          array (
            'type' => 'resurce',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'int',
      ),
      'lastInsertId' => 
      array (
        'description' => 'Returns insert id for the auto_increment column inserted in the last SQL statement',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$primaryKey' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$sequenceName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'int',
      ),
      'getColumnList' => 
      array (
        'description' => 'Gets a list of columns',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$columnList' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'limit' => 
      array (
        'description' => 'Appends a LIMIT clause to $sqlQuery argument
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">limit</span>(<span class="string">"SELECT * FROM robots"</span>, <span class="number">5</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlQuery' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$number' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'tableExists' => 
      array (
        'description' => 'Generates SQL checking for the existence of a schema.table
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">tableExists</span>(<span class="string">"blog"</span>, <span class="string">"posts"</span>)</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'viewExists' => 
      array (
        'description' => 'Generates SQL checking for the existence of a schema.view
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">viewExists</span>(<span class="string">"active_users"</span>, <span class="string">"posts"</span>)</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$viewName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'forUpdate' => 
      array (
        'description' => 'Devuelve un FOR UPDATE valido para un SELECT del RBDM',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlQuery' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'sharedLock' => 
      array (
        'description' => 'Devuelve un SHARED LOCK valido para un SELECT del RBDM',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlQuery' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'createTable' => 
      array (
        'description' => 'Creates a table using MySQL SQL',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$definition' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'dropTable' => 
      array (
        'description' => 'Drops a table from a schema/database',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$ifExists' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => true,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'addColumn' => 
      array (
        'description' => 'Adds a column to a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'modifyColumn' => 
      array (
        'description' => 'Modifies a table column based on a definition',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'dropColumn' => 
      array (
        'description' => 'Drops a column from a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$columnName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'addIndex' => 
      array (
        'description' => 'Adds an index to a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$index' => 
          array (
            'type' => 'DbIndex',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'dropIndex' => 
      array (
        'description' => 'Drop an index from a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$indexName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'addPrimaryKey' => 
      array (
        'description' => 'Adds a primary key to a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$index' => 
          array (
            'type' => 'Phalcon_Db_Index',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'dropPrimaryKey' => 
      array (
        'description' => 'Drops primary key from a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'addForeignKey' => 
      array (
        'description' => 'Adds a foreign key to a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$reference' => 
          array (
            'type' => 'Phalcon_Db_Reference',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean true',
      ),
      'dropForeignKey' => 
      array (
        'description' => 'Drops a foreign key from a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referenceName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean true',
      ),
      'getColumnDefinition' => 
      array (
        'description' => 'Returns the SQL column definition from a column',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'describeTable' => 
      array (
        'description' => 'Generates SQL describing a table
 <pre class="source-code iphp"><span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">describeTable</span>(<span class="string">"posts"</span>) ?&gt;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'listTables' => 
      array (
        'description' => 'List all tables on a database
 <pre class="source-code iphp"><span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">listTables</span>(<span class="string">"blog"</span>) ?&gt;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getDateUsingFormat' => 
      array (
        'description' => 'Returns a database date formatted
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">format</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">getDateUsingFormat</span>(<span class="string">"2011-02-01"</span>, <span class="string">"YYYY-MM-DD"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$date' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$format' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => 'YYYY-MM-DD',
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'describeIndexes' => 
      array (
        'description' => 'Lists table indexes',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Db_Index[]',
      ),
      'describeReferences' => 
      array (
        'description' => 'Lists table references',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Db_Reference[]',
      ),
      'tableOptions' => 
      array (
        'description' => 'Gets creation options from a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
    ),
  ),
  'Phalcon_Db_Adapter_Postgresql' => 
  array (
    'description' => 'Phalcon_Db_Adapter_Postgresql is the Phalcon_Db adapter for the PostgreSQL database.
 <pre class="source-code iphp">#<span class="identifier">Setting</span> <span class="identifier">all</span> <span class="identifier">posible</span> <span class="identifier">parameters</span>
<span class="tag">$<span class="identifier">config</span></span> = <span class="keyword operator">new</span> <span class="identifier">stdClass</span>();
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">host</span> = <span class="string">\'localhost\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">username</span> = <span class="string">\'postgres\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">password</span> = <span class="string">\'sigma\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">name</span> = <span class="string">\'swarm\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">charset</span> = <span class="string">\'UNICODE\'</span>;

<span class="tag">$<span class="identifier">connection</span></span> = <span class="identifier">Phalcon_Db</span>::<span class="identifier">factory</span>(<span class="string">\'Postgresql\'</span>, <span class="tag">$<span class="identifier">config</span></span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
      'DB_ASSOC' => 1,
      'DB_BOTH' => 2,
      'DB_NUM' => 3,
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Constructor for Phalcon_Db_Adapter_Postgresql. This method does not should to be called directly. Use Phalcon_Db::factory instead',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$descriptor' => 
          array (
            'type' => 'stdClass',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'connect' => 
      array (
        'description' => 'This method is automatically called in Phalcon_Db_Postgresql constructor.
 Call it when you need to restore a database connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$descriptor' => 
          array (
            'type' => 'stdClass',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'query' => 
      array (
        'description' => 'Sends SQL statements to the PostgreSQL database server returning success state.
 When the SQL sent have returned any row, the result is a PHP resource.
 <pre class="source-code iphp"><span class="comment">//Inserting data
</span> <span class="tag">$<span class="identifier">success</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"INSERT INTO robots VALUES (1, \'Astro Boy\')"</span>);
 <span class="tag">$<span class="identifier">success</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"INSERT INTO robots VALUES (?, ?)"</span>, <span class="keyword builtin">array</span>(<span class="number">1</span>, <span class="string">\'Astro Boy\'</span>));
 <span class="comment">//Querying data
</span> <span class="tag">$<span class="identifier">resultset</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"SELECT * FROM robots WHERE type=\'mechanical\'"</span>);</pre>
 $resultset = $connection->query("SELECT * FROM robots WHERE type=?", array("mechanical"));</code>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlStatement' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Db_Result_Postgresql|boolean',
      ),
      'affectedRows' => 
      array (
        'description' => 'Returns number of affected rows by the last INSERT/UPDATE/DELETE repoted by PostgreSQL
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"DELETE FROM robots"</span>);
<span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">affectedRows</span>(), <span class="string">\' were deleted\'</span>;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'int',
      ),
      'close' => 
      array (
        'description' => 'Closes active connection returning success. Phalcon automatically closes and destroys active connections within Phalcon_Db_Pool',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getConnectionId' => 
      array (
        'description' => 'Gets the active connection unique identifier. A pgsql resource',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$asString' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'escapeString' => 
      array (
        'description' => 'Escapes a value to avoid SQL injections',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$str' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'bindParams' => 
      array (
        'description' => 'Bind params to SQL select',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlSelect' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$params' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'error' => 
      array (
        'description' => 'Returns last error message from PostgreSQL',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$errorString' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'noError' => 
      array (
        'description' => 'Returns last error code from PostgreSQL',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$resultQuery' => 
          array (
            'type' => 'resurce',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'int',
      ),
      'lastInsertId' => 
      array (
        'description' => 'Returns insert id for the auto_increment column inserted in the last SQL statement',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$primaryKey' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$sequenceName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'int',
      ),
      'getColumnList' => 
      array (
        'description' => 'Gets a list of columns',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$columnList' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'limit' => 
      array (
        'description' => 'Appends a LIMIT clause to $sqlQuery argument
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">limit</span>(<span class="string">"SELECT * FROM robots"</span>, <span class="number">5</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlQuery' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$number' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'tableExists' => 
      array (
        'description' => 'Generates SQL checking for the existence of a schema.table
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">tableExists</span>(<span class="string">"blog"</span>, <span class="string">"posts"</span>)</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'viewExists' => 
      array (
        'description' => 'Generates SQL checking for the existence of a schema.view
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">viewExists</span>(<span class="string">"active_users"</span>, <span class="string">"posts"</span>)</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$viewName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'forUpdate' => 
      array (
        'description' => 'Devuelve un FOR UPDATE valido para un SELECT del RBDM',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlQuery' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'sharedLock' => 
      array (
        'description' => 'Devuelve un SHARED LOCK valido para un SELECT del RBDM',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlQuery' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'createTable' => 
      array (
        'description' => 'Creates a table using PostgreSQL SQL',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$definition' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'dropTable' => 
      array (
        'description' => 'Drops a table from a schema/database',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$ifExists' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => true,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'addColumn' => 
      array (
        'description' => 'Adds a column to a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'modifyColumn' => 
      array (
        'description' => 'Modifies a table column based on a definition',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'dropColumn' => 
      array (
        'description' => 'Drops a column from a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$columnName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'addIndex' => 
      array (
        'description' => 'Adds an index to a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$index' => 
          array (
            'type' => 'DbIndex',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'dropIndex' => 
      array (
        'description' => 'Drop an index from a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$indexName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'addPrimaryKey' => 
      array (
        'description' => 'Adds a primary key to a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$index' => 
          array (
            'type' => 'Phalcon_Db_Index',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'dropPrimaryKey' => 
      array (
        'description' => 'Drops primary key from a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'addForeignKey' => 
      array (
        'description' => 'Adds a foreign key to a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$reference' => 
          array (
            'type' => 'Phalcon_Db_Reference',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean true',
      ),
      'dropForeignKey' => 
      array (
        'description' => 'Drops a foreign key from a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referenceName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean true',
      ),
      'getColumnDefinition' => 
      array (
        'description' => 'Returns the SQL column definition from a column',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'describeTable' => 
      array (
        'description' => 'Generates SQL describing a table
 <pre class="source-code iphp"><span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">describeTable</span>(<span class="string">"posts"</span>) ?&gt;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'listTables' => 
      array (
        'description' => 'List all tables on a database
 <pre class="source-code iphp"><span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">listTables</span>(<span class="string">"blog"</span>) ?&gt;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getDateUsingFormat' => 
      array (
        'description' => 'Returns a database date formatted
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">format</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">getDateUsingFormat</span>(<span class="string">"2011-02-01"</span>, <span class="string">"YYYY-MM-DD"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$date' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$format' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => 'YYYY-MM-DD',
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'describeIndexes' => 
      array (
        'description' => 'Lists table indexes',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Db_Index[]',
      ),
      'describeReferences' => 
      array (
        'description' => 'Lists table references',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Db_Reference[]',
      ),
      'tableOptions' => 
      array (
        'description' => 'Gets creation options from a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
    ),
  ),
  'Phalcon_Db_Column' => 
  array (
    'description' => 'Allows to define columns to be used on create or alter table operations

<pre class="source-code iphp"><span class="comment">//column definition
</span> <span class="tag">$<span class="identifier">column</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Db_Column</span>(<span class="string">"id"</span>, <span class="keyword builtin">array</span>(
   <span class="string">"type"</span> =&gt;  <span class="identifier">Phalcon_Db_Column</span>::<span class="identifier">TYPE_INTEGER</span>,
   <span class="string">"size"</span> =&gt; <span class="number">10</span>,
   <span class="string">"unsigned"</span> =&gt; <span class="keyword literal">true</span>,
   <span class="string">"notNull"</span> =&gt; <span class="keyword literal">true</span>,
   <span class="string">"autoIncrement"</span> =&gt; <span class="keyword literal">true</span>,
   <span class="string">"first"</span> =&gt; <span class="keyword literal">true</span>
 ));

 <span class="comment">//add column to existing table
</span> <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">addColumn</span>(<span class="string">"robots"</span>, <span class="keyword literal">null</span>, <span class="tag">$<span class="identifier">column</span></span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
      'TYPE_INTEGER' => 0,
      'TYPE_DATE' => 1,
      'TYPE_VARCHAR' => 2,
      'TYPE_DECIMAL' => 3,
      'TYPE_DATETIME' => 4,
      'TYPE_CHAR' => 5,
      'TYPE_TEXT' => 6,
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Db_Column constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$columnName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$definition' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getSchemaName' => 
      array (
        'description' => 'Returns schema\'s table related to column',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getName' => 
      array (
        'description' => 'Returns column name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getType' => 
      array (
        'description' => 'Returns column type',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'int',
      ),
      'getSize' => 
      array (
        'description' => 'Returns column size',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'int',
      ),
      'getScale' => 
      array (
        'description' => 'Returns column scale',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'int',
      ),
      'isUnsigned' => 
      array (
        'description' => 'Returns true if number column is unsigned',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'isNotNull' => 
      array (
        'description' => 'Not null',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'isAutoIncrement' => 
      array (
        'description' => 'Auto-Increment',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'isFirst' => 
      array (
        'description' => 'Check whether column have first position in table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getAfterPosition' => 
      array (
        'description' => 'Check whether field absolute to position in table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Db_Dialect_Mysql' => 
  array (
    'description' => 'Generates database specific SQL for the MySQL RBDM',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'abstract',
    'methods' => 
    array (
      'limit' => 
      array (
        'description' => 'Generates the SQL for a MySQL LIMIT clause',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$sqlQuery' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$number' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'getColumnList' => 
      array (
        'description' => 'Gets a list of columns',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$columnList' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'getColumnDefinition' => 
      array (
        'description' => 'Gets the column name in MySQL',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'addColumn' => 
      array (
        'description' => 'Generates SQL to add a column to a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'modifyColumn' => 
      array (
        'description' => 'Generates SQL to modify a column in a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'dropColumn' => 
      array (
        'description' => 'Generates SQL to delete a column from a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$columnName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'addIndex' => 
      array (
        'description' => 'Generates SQL to add an index to a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$index' => 
          array (
            'type' => 'Phalcon_Db_Index',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'dropIndex' => 
      array (
        'description' => 'Generates SQL to delete an index from a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$indexName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'addPrimaryKey' => 
      array (
        'description' => 'Generates SQL to add the primary key to a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$index' => 
          array (
            'type' => 'Phalcon_Db_Index',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'dropPrimaryKey' => 
      array (
        'description' => 'Generates SQL to delete primary key from a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'addForeignKey' => 
      array (
        'description' => 'Generates SQL to add an index to a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$reference' => 
          array (
            'type' => 'Phalcon_Db_Reference',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'dropForeignKey' => 
      array (
        'description' => 'Generates SQL to delete a foreign key from a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referenceName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      '_getTableOptions' => 
      array (
        'description' => 'Generates SQL to add the table creation options',
        'modifiers' => 
        array (
          0 => 'protected',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$definition' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'createTable' => 
      array (
        'description' => 'Generates SQL to create a table in MySQL',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$definition' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'dropTable' => 
      array (
        'description' => 'Generates SQL to drop a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$ifExists' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => true,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'tableExists' => 
      array (
        'description' => 'Generates SQL checking for the existence of a schema.table
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Db_Dialect_Mysql</span>::<span class="identifier">tableExists</span>(<span class="string">"posts"</span>, <span class="string">"blog"</span>)</pre>
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Db_Dialect_Mysql</span>::<span class="identifier">tableExists</span>(<span class="string">"posts"</span>)</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'describeTable' => 
      array (
        'description' => 'Generates SQL describing a table
 <pre class="source-code iphp"><span class="identifier">print_r</span>(<span class="identifier">Phalcon_Db_Dialect_Mysql</span>::<span class="identifier">describeTable</span>(<span class="string">"posts"</span>) ?&gt;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'listTables' => 
      array (
        'description' => 'List all tables on database
 <pre class="source-code iphp"><span class="identifier">print_r</span>(<span class="identifier">Phalcon_Db_Dialect_Mysql</span>::<span class="identifier">listTables</span>(<span class="string">"blog"</span>) ?&gt;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'describeIndexes' => 
      array (
        'description' => 'Generates SQL to query indexes on a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'describeReferences' => 
      array (
        'description' => 'Generates SQL to query foreign keys on a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'tableOptions' => 
      array (
        'description' => 'Generates the SQL to describe the table creation options',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Db_Dialect_Postgresql' => 
  array (
    'description' => 'Generates database specific SQL for the PostgreSQL RBDM',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'abstract',
    'methods' => 
    array (
      'limit' => 
      array (
        'description' => 'Generates the SQL for a PostgreSQL LIMIT clause',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$sqlQuery' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$number' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'getColumnList' => 
      array (
        'description' => 'Gets a list of columns',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$columnList' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'getColumnDefinition' => 
      array (
        'description' => 'Gets the column name in PostgreSQL',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'addColumn' => 
      array (
        'description' => 'Generates SQL to add a column to a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'modifyColumn' => 
      array (
        'description' => 'Generates SQL to modify a column in a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$column' => 
          array (
            'type' => 'Phalcon_Db_Column',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'dropColumn' => 
      array (
        'description' => 'Generates SQL to delete a column from a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$columnName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'addIndex' => 
      array (
        'description' => 'Generates SQL to add an index to a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$index' => 
          array (
            'type' => 'Phalcon_Db_Index',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'dropIndex' => 
      array (
        'description' => 'Generates SQL to delete an index from a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$indexName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'addPrimaryKey' => 
      array (
        'description' => 'Generates SQL to add the primary key to a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$index' => 
          array (
            'type' => 'Phalcon_Db_Index',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'dropPrimaryKey' => 
      array (
        'description' => 'Generates SQL to delete primary key from a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'addForeignKey' => 
      array (
        'description' => 'Generates SQL to add an index to a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$reference' => 
          array (
            'type' => 'Phalcon_Db_Reference',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'dropForeignKey' => 
      array (
        'description' => 'Generates SQL to delete a foreign key from a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referenceName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      '_getTableOptions' => 
      array (
        'description' => 'Generates SQL to add the table creation options',
        'modifiers' => 
        array (
          0 => 'protected',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$definition' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'createTable' => 
      array (
        'description' => 'Generates SQL to create a table in PostgreSQL',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$definition' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'dropTable' => 
      array (
        'description' => 'Generates SQL to drop a table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$ifExists' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => true,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'tableExists' => 
      array (
        'description' => 'Generates SQL checking for the existence of a schema.table
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Db_Dialect_Postgresql</span>::<span class="identifier">tableExists</span>(<span class="string">"posts"</span>, <span class="string">"blog"</span>)</pre>
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Db_Dialect_Postgresql</span>::<span class="identifier">tableExists</span>(<span class="string">"posts"</span>)</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$tableName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'describeTable' => 
      array (
        'description' => 'Generates a SQL describing a table
 <pre class="source-code iphp"><span class="identifier">print_r</span>(<span class="identifier">Phalcon_Db_Dialect_Postgresql</span>::<span class="identifier">describeTable</span>(<span class="string">"posts"</span>) ?&gt;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'listTables' => 
      array (
        'description' => 'List all tables on database
 <pre class="source-code iphp"><span class="identifier">print_r</span>(<span class="identifier">Phalcon_Db_Dialect_Postgresql</span>::<span class="identifier">listTables</span>(<span class="string">"blog"</span>) ?&gt;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$schemaName' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'describeIndexes' => 
      array (
        'description' => 'Generates SQL to query indexes on a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'describeReferences' => 
      array (
        'description' => 'Generates SQL to query foreign keys on a table',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'tableOptions' => 
      array (
        'description' => 'Generates the SQL to describe the table creation options',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Db_Exception' => 
  array (
    'description' => 'Exceptions thrown in Phalcon_Db will use this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Db_Index' => 
  array (
    'description' => 'Allows to define indexes to be used on tables. Indexes are a common way
 to enhance database performance. An index allows the database server to find
 and retrieve specific rows much faster than it could do without an index.

 <pre class="source-code iphp"></pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Db_Index constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$indexName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$columns' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getName' => 
      array (
        'description' => 'Gets the index name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getColumns' => 
      array (
        'description' => 'Gets the columns that comprends the index',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      '__set_state' => 
      array (
        'description' => 'Restore a Phalcon_Db_Index object from export',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Db_Index',
      ),
    ),
  ),
  'Phalcon_Db_Pool' => 
  array (
    'description' => 'Manages the caching of database connections. With the help of Phalcon_Db_Pool, developers can be
 sure that no new database connections will make when calling multiple of times Phalcon_Db_Pool::getConnection().

<pre class="source-code iphp"><span class="tag">$<span class="identifier">configMysql</span></span> = <span class="keyword operator">new</span> <span class="identifier">stdClass</span>();
<span class="tag">$<span class="identifier">configMysql</span></span>-&gt;<span class="identifier">adapter</span> = <span class="string">\'Mysql\'</span>;
<span class="tag">$<span class="identifier">configMysql</span></span>-&gt;<span class="identifier">host</span> = <span class="string">\'127.0.0.1\'</span>;
<span class="tag">$<span class="identifier">configMysql</span></span>-&gt;<span class="identifier">username</span> = <span class="string">\'root\'</span>;
<span class="tag">$<span class="identifier">configMysql</span></span>-&gt;<span class="identifier">password</span> = <span class="string">\'\'</span>;
<span class="tag">$<span class="identifier">configMysql</span></span>-&gt;<span class="identifier">name</span> = <span class="string">\'phalcon_test\'</span>;

<span class="identifier">Phalcon_Db_Pool</span>::<span class="identifier">setDefaultDescriptor</span>(<span class="tag">$<span class="identifier">config</span></span>);

#<span class="identifier">Returns</span> <span class="identifier">a</span> <span class="identifier">connection</span>
<span class="tag">$<span class="identifier">connection</span></span> = <span class="identifier">Phalcon_Db_Pool</span>::<span class="identifier">getConnection</span>();

#<span class="identifier">Returns</span> <span class="identifier">the</span> <span class="identifier">same</span> <span class="identifier">connection</span>
<span class="tag">$<span class="identifier">connection</span></span> = <span class="identifier">Phalcon_Db_Pool</span>::<span class="identifier">getConnection</span>();

#<span class="identifier">Returns</span> <span class="identifier">a</span> <span class="keyword operator">new</span> <span class="identifier">connection</span>
<span class="tag">$<span class="identifier">connection</span></span> = <span class="identifier">Phalcon_Db_Pool</span>::<span class="identifier">getConnection</span>(<span class="keyword operator">new</span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'hasDefaultDescriptor' => 
      array (
        'description' => 'Check if a default descriptor has already defined',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'setDefaultDescriptor' => 
      array (
        'description' => 'Sets the default descriptor for database connections.
<pre class="source-code iphp"><span class="tag">$<span class="identifier">config</span></span> = <span class="keyword builtin">array</span>(
  <span class="string">"adapter"</span> =&gt; <span class="string">"Mysql"</span>,
  <span class="string">"host"</span> =&gt; <span class="string">"localhost"</span>,
  <span class="string">"username"</span> =&gt; <span class="string">"scott"</span>,
  <span class="string">"password"</span> =&gt; <span class="string">"cheetah"</span>,
  <span class="string">"name"</span> =&gt; <span class="string">"test_db"</span>
);
<span class="identifier">Phalcon_Db_Pool</span>::<span class="identifier">setDefaultDescriptor</span>(<span class="tag">$<span class="identifier">config</span></span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$options' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'getConnection' => 
      array (
        'description' => 'Returns a connection builded with the default descriptor parameters
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">connection</span></span> = <span class="identifier">Phalcon_Db_Pool</span>::<span class="identifier">getConnection</span>();</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$newConnection' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
          '$renovate' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Db',
      ),
      'reset' => 
      array (
        'description' => 'Resets default descriptor and connection',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Db_Profiler_Item' => 
  array (
    'description' => 'This class identifies each profile in a Phalcon_Db_Profiler',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'setSQLStatement' => 
      array (
        'description' => 'Sets the SQL statement related to the profile',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlStatement' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getSQLStatement' => 
      array (
        'description' => 'Returns the SQL statement related to the profile',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setInitialTime' => 
      array (
        'description' => 'Sets the timestamp on when the profile started',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$initialTime' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setFinalTime' => 
      array (
        'description' => 'Sets the timestamp on when the profile ended',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$finalTime' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getInitialTime' => 
      array (
        'description' => 'Returns the initial time in milseconds on when the profile started',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'double',
      ),
      'getFinalTime' => 
      array (
        'description' => 'Returns the initial time in milseconds on when the profile ended',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'double',
      ),
      'getTotalElapsedSeconds' => 
      array (
        'description' => 'Returns the total time in seconds spent by the profile',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'double',
      ),
    ),
  ),
  'Phalcon_Db_Profiler' => 
  array (
    'description' => 'Instances of Phalcon_Db can generate execution profiles
 on SQL statements sent to the relational database. Profiled
 information includes execution time in miliseconds.
 This helps you to identify bottlenecks in your applications.

<pre class="source-code iphp"><span class="tag">$<span class="identifier">profiler</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Db_Profiler</span>();

 <span class="comment">//Set the connection profiler
</span> <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">setProfiler</span>(<span class="tag">$<span class="identifier">profiler</span></span>);

 <span class="tag">$<span class="identifier">sql</span></span> = <span class="string">"SELECT buyer_name, quantity, product_name
 FROM buyers LEFT JOIN products ON
 buyers.pid=products.id"</span>;

 <span class="comment">//Execute a SQL statement
</span> <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="tag">$<span class="identifier">sql</span></span>);

 <span class="comment">//Get the last profile in the profiler
</span> <span class="tag">$<span class="identifier">profile</span></span> = <span class="tag">$<span class="identifier">profiler</span></span>-&gt;<span class="identifier">getLastProfile</span>();

 <span class="keyword builtin">echo</span> <span class="string">"SQL Statement: "</span>, <span class="tag">$<span class="identifier">profile</span></span>-&gt;<span class="identifier">getSQLStatement</span>(), <span class="string">"\\n"</span>;
 <span class="keyword builtin">echo</span> <span class="string">"Start Time: "</span>, <span class="tag">$<span class="identifier">profile</span></span>-&gt;<span class="identifier">getInitialTime</span>(), <span class="string">"\\n"</span>;
 <span class="keyword builtin">echo</span> <span class="string">"Final Time: "</span>, <span class="tag">$<span class="identifier">profile</span></span>-&gt;<span class="identifier">getFinalTime</span>(), <span class="string">"\\n"</span>;
 <span class="keyword builtin">echo</span> <span class="string">"Total Elapsed Time: "</span>, <span class="tag">$<span class="identifier">profile</span></span>-&gt;<span class="identifier">getTotalElapsedSeconds</span>(), <span class="string">"\\n"</span>;</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'startProfile' => 
      array (
        'description' => 'Starts the profile of a SQL sentence',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlStatement' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'stopProfile' => 
      array (
        'description' => 'Stops the active profile',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'getNumberTotalStatements' => 
      array (
        'description' => 'Returns the total number of SQL statements processed',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'integer',
      ),
      'getTotalElapsedSeconds' => 
      array (
        'description' => 'Returns the total time in seconds spent by the profiles',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'double',
      ),
      'getProfiles' => 
      array (
        'description' => 'Returns all the processed profiles',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Db_Profiler_Item[]',
      ),
      'reset' => 
      array (
        'description' => 'Resets the profiler, cleaning up all the profiles',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'getLastProfile' => 
      array (
        'description' => 'Returns the last profile executed in the profiler',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Db_Profiler_Item',
      ),
    ),
  ),
  'Phalcon_Db_RawValue' => 
  array (
    'description' => 'This class lets to insert/update raw data without quoting or formating.

<example>
 The next example shows how to use the MySQL now() function as a field value.
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">subscriber</span></span> = <span class="keyword operator">new</span> <span class="identifier">Subscribers</span>();
<span class="tag">$<span class="identifier">subscriber</span></span>-&gt;<span class="identifier">email</span> = <span class="string">\'andres@phalconphp.com\'</span>;
<span class="tag">$<span class="identifier">subscriber</span></span>-&gt;<span class="identifier">created_at</span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Db_RawValue</span>(<span class="string">\'now()\'</span>);
<span class="tag">$<span class="identifier">subscriber</span></span>-&gt;<span class="identifier">save</span>();</pre>
 </example>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Db_RawValue constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$value' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getValue' => 
      array (
        'description' => 'Returns internal raw value without quoting or formating',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      '__toString' => 
      array (
        'description' => 'Magic method __toString returns raw value without quoting or formating',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Db_Reference' => 
  array (
    'description' => 'Allows to define reference constraints on tables

<pre class="source-code iphp"><span class="tag">$<span class="identifier">reference</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Db_Reference</span>(<span class="string">"field_fk"</span>, <span class="keyword builtin">array</span>(
  <span class="string">\'referencedSchema\'</span> =&gt; <span class="string">"invoicing"</span>,
  <span class="string">\'referencedTable\'</span> =&gt; <span class="string">"products"</span>,
  <span class="string">\'columns\'</span> =&gt; <span class="keyword builtin">array</span>(<span class="string">"product_type"</span>, <span class="string">"product_code"</span>),
  <span class="string">\'referencedColumns\'</span> =&gt; <span class="keyword builtin">array</span>(<span class="string">"type"</span>, <span class="string">"code"</span>)
));</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Db_Reference constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$referenceName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$definition' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getName' => 
      array (
        'description' => 'Gets the index name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getSchemaName' => 
      array (
        'description' => 'Gets the schema where referenced table is',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getReferencedSchema' => 
      array (
        'description' => 'Gets the schema where referenced table is',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getColumns' => 
      array (
        'description' => 'Gets local columns which reference is based',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getReferencedTable' => 
      array (
        'description' => 'Gets the referenced table',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getReferencedColumns' => 
      array (
        'description' => 'Gets referenced columns',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      '__set_state' => 
      array (
        'description' => 'Restore a Phalcon_Db_Reference object from export',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Db_Reference',
      ),
    ),
  ),
  'Phalcon_Db_Result_Mysql' => 
  array (
    'description' => 'Encapsulates the resultset internals

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">result</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"SELECT * FROM robots ORDER BY name"</span>);
<span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">setFetchMode</span>(<span class="identifier">Phalcon_Db</span>::<span class="identifier">DB_NUM</span>);
<span class="keyword">while</span>(<span class="tag">$<span class="identifier">robot</span></span> = <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">fetchArray</span>()){
  <span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">robot</span></span>);
}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Db_Result_Mysql constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$result' => 
          array (
            'type' => 'object',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'fetchArray' => 
      array (
        'description' => 'Returns an array of strings that corresponds to the fetched row, or FALSE if there are no more rows.
 This method is affected by the active fetch flag set using Phalcon_Db_Result_Mysql::setFetchMode
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">result</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"SELECT * FROM robots ORDER BY name"</span>);
<span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">setFetchMode</span>(<span class="identifier">Phalcon_Db</span>::<span class="identifier">DB_NUM</span>);
<span class="keyword">while</span>(<span class="tag">$<span class="identifier">robot</span></span> = <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">fetchArray</span>()){
  <span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">robot</span></span>);
}</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'numRows' => 
      array (
        'description' => 'Gets number of rows returned by a resulset
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">result</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"SELECT * FROM robots ORDER BY name"</span>);
<span class="keyword builtin">echo</span> <span class="string">\'There are \'</span>, <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">numRows</span>(), <span class="string">\' rows in the resulset\'</span>;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'int',
      ),
      'dataSeek' => 
      array (
        'description' => 'Moves internal resulset cursor to another position letting us to fetch a certain row
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">result</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"SELECT * FROM robots ORDER BY name"</span>);
<span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">dataSeek</span>(<span class="number">2</span>); <span class="comment">// Move to third row on result
</span> <span class="tag">$<span class="identifier">row</span></span> = <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">fetchArray</span>(); // <span class="identifier">Fetch</span> <span class="identifier">third</span> <span class="identifier">row</span></pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$number' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'int',
      ),
      'setFetchMode' => 
      array (
        'description' => 'Changes the fetching mode affecting Phalcon_Db_Mysql::fetchArray
 <pre class="source-code iphp"><span class="comment">//Return array with integer indexes
</span> <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">setFetchMode</span>(<span class="identifier">Phalcon_Db</span>::<span class="identifier">DB_NUM</span>);
 <span class="comment">//Return associative array without integer indexes
</span> <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">setFetchMode</span>(<span class="identifier">Phalcon_Db</span>::<span class="identifier">DB_ASSOC</span>);
 <span class="comment">//Return associative array together with integer indexes
</span> <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">setFetchMode</span>(<span class="identifier">Phalcon_Db</span>::<span class="identifier">DB_BOTH</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$fetchMode' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getInternalResult' => 
      array (
        'description' => 'Gets the internal MySQLi result object',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'mysqli_result',
      ),
    ),
  ),
  'Phalcon_Db_Result_Postgresql' => 
  array (
    'description' => 'Encapsulates the resultset internals

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">result</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"SELECT * FROM robots ORDER BY name"</span>);
<span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">setFetchMode</span>(<span class="identifier">Phalcon_Db</span>::<span class="identifier">DB_NUM</span>);
<span class="keyword">while</span>(<span class="tag">$<span class="identifier">robot</span></span> = <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">fetchArray</span>()){
  <span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">robot</span></span>);
}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Db_Result_Postgresql constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$result' => 
          array (
            'type' => 'resource',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'fetchArray' => 
      array (
        'description' => 'Returns an array of strings that corresponds to the fetched row, or FALSE if there are no more rows.
 This method is affected by the active fetch flag set using Phalcon_Db_Result_Postgresql::setFetchMode
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">result</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"SELECT * FROM robots ORDER BY name"</span>);
<span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">setFetchMode</span>(<span class="identifier">Phalcon_Db</span>::<span class="identifier">DB_NUM</span>);
<span class="keyword">while</span>(<span class="tag">$<span class="identifier">robot</span></span> = <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">fetchArray</span>()){
  <span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">robot</span></span>);
}</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'numRows' => 
      array (
        'description' => 'Gets number of rows returned by a resulset
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">result</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"SELECT * FROM robots ORDER BY name"</span>);
<span class="keyword builtin">echo</span> <span class="string">\'There are \'</span>, <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">numRows</span>(), <span class="string">\' rows in the resulset\'</span>;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'int',
      ),
      'dataSeek' => 
      array (
        'description' => 'Moves internal resulset cursor to another position letting us to fetch a certain row
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">result</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"SELECT * FROM robots ORDER BY name"</span>);
<span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">dataSeek</span>(<span class="number">2</span>); <span class="comment">// Move to third row on result
</span> <span class="tag">$<span class="identifier">row</span></span> = <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">fetchArray</span>(); // <span class="identifier">Fetch</span> <span class="identifier">third</span> <span class="identifier">row</span></pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$number' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'int',
      ),
      'setFetchMode' => 
      array (
        'description' => 'Changes the fetching mode affecting Phalcon_Db_Postgresql::fetchArray
 <pre class="source-code iphp"><span class="comment">//Return array with integer indexes
</span> <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">setFetchMode</span>(<span class="identifier">Phalcon_Db</span>::<span class="identifier">DB_NUM</span>);
 <span class="comment">//Return associative array without integer indexes
</span> <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">setFetchMode</span>(<span class="identifier">Phalcon_Db</span>::<span class="identifier">DB_ASSOC</span>);
 <span class="comment">//Return associative array together with integer indexes
</span> <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">setFetchMode</span>(<span class="identifier">Phalcon_Db</span>::<span class="identifier">DB_BOTH</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$fetchMode' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getInternalResult' => 
      array (
        'description' => 'Gets the internal MySQLi result object',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'mysqli_result',
      ),
    ),
  ),
  'Phalcon_Db' => 
  array (
    'description' => 'Phalcon_Db and its related classes provide a simple SQL database interface for Phalcon Framework.
 The Phalcon_Db is the basic class you use to connect your PHP application to an RDBMS.
 There is a different adapter class for each brand of RDBMS.

 This component is intended to lower level database operations. If you want to interact with databases using
 high level abstraction use Phalcon_Model.

 Phalcon_Db is an abstract class. You only can use it with a database adapter like Phalcon_Db_Adapter_Mysql

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">config</span></span> = <span class="keyword operator">new</span> <span class="identifier">stdClass</span>();
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">host</span> = <span class="string">\'localhost\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">username</span> = <span class="string">\'machine\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">password</span> = <span class="string">\'sigma\'</span>;
<span class="tag">$<span class="identifier">config</span></span>-&gt;<span class="identifier">name</span> = <span class="string">\'swarm\'</span>;

<span class="keyword">try</span> {

  <span class="tag">$<span class="identifier">connection</span></span> = <span class="identifier">Phalcon_Db</span>::<span class="identifier">factory</span>(<span class="string">\'Mysql\'</span>, <span class="tag">$<span class="identifier">config</span></span>);

  <span class="tag">$<span class="identifier">result</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">query</span>(<span class="string">"SELECT * FROM robots LIMIT 5"</span>);
  <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">setFetchMode</span>(<span class="identifier">Phalcon_Db</span>::<span class="identifier">DB_NUM</span>);
  <span class="keyword">while</span>(<span class="tag">$<span class="identifier">robot</span></span> = <span class="tag">$<span class="identifier">result</span></span>-&gt;<span class="identifier">fetchArray</span>()){
    <span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">robot</span></span>);
  }

} <span class="keyword">catch</span>(<span class="identifier">Phalcon_Db_Exception</span> <span class="tag">$<span class="identifier">e</span></span>){
	<span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">e</span></span>-&gt;<span class="identifier">getMessage</span>(), <span class="identifier">PHP_EOL</span>;
}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
      'DB_ASSOC' => 1,
      'DB_BOTH' => 2,
      'DB_NUM' => 3,
    ),
    'type' => 'abstract',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Db constructor, this method should not be called directly. Use Phalcon_Db::factory instead',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$descriptor' => 
          array (
            'type' => 'stdClass',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setLogger' => 
      array (
        'description' => 'Sets a logger class to log all SQL operations sent to database server',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$logger' => 
          array (
            'type' => 'Phalcon_Logger',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getLogger' => 
      array (
        'description' => 'Returns the active logger',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Logger',
      ),
      'log' => 
      array (
        'description' => 'Sends arbitrary text to a related logger in the instance',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$sqlStatement' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$type' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setProfiler' => 
      array (
        'description' => 'Sets a database profiler to the connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$profiler' => 
          array (
            'type' => 'Phalcon_Db_Profiler',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'fetchOne' => 
      array (
        'description' => 'Returns the first row in a SQL query result
 <pre class="source-code iphp"><span class="comment">//Getting first robot
</span> <span class="tag">$<span class="identifier">robot</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">fecthOne</span>(<span class="string">"SELECT * FROM robots"</span>);
 <span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">robot</span></span>);
 <span class="comment">//Getting first robot with associative indexes only
</span> <span class="tag">$<span class="identifier">robot</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">fecthOne</span>(<span class="string">"SELECT * FROM robots"</span>, <span class="identifier">Phalcon_Db_Result</span>::<span class="identifier">DB_ASSOC</span>);
 <span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">robot</span></span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlQuery' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$fetchMode' => 
          array (
            'type' => 'int',
            'optional' => true,
            'default' => 2,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'fetchAll' => 
      array (
        'description' => 'Dumps the complete result of a query into an array
 <pre class="source-code iphp"><span class="comment">//Getting all robots
</span> <span class="tag">$<span class="identifier">robots</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">fetchAll</span>(<span class="string">"SELECT * FROM robots"</span>);
 <span class="keyword">foreach</span>(<span class="tag">$<span class="identifier">robots</span></span> <span class="keyword operator">as</span> <span class="tag">$<span class="identifier">robot</span></span>){
    <span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">robot</span></span>);
 }
 <span class="comment">//Getting all robots with associative indexes only
</span> <span class="tag">$<span class="identifier">robots</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">fetchAll</span>(<span class="string">"SELECT * FROM robots"</span>, <span class="identifier">Phalcon_Db_Result</span>::<span class="identifier">DB_ASSOC</span>);
 <span class="keyword">foreach</span>(<span class="tag">$<span class="identifier">robots</span></span> <span class="keyword operator">as</span> <span class="tag">$<span class="identifier">robot</span></span>){
    <span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">robot</span></span>);
 }</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$sqlQuery' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$fetchMode' => 
          array (
            'type' => 'int',
            'optional' => true,
            'default' => 2,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'insert' => 
      array (
        'description' => 'Inserts data into a table using custom RBDM SQL syntax
 <pre class="source-code iphp"><span class="comment">//Inserting a new robot
</span> <span class="tag">$<span class="identifier">success</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">insert</span>(
     <span class="string">"robots"</span>,
     <span class="keyword builtin">array</span>(<span class="string">"Astro Boy"</span>, <span class="number">1952</span>),
     <span class="keyword builtin">array</span>(<span class="string">"name"</span>, <span class="string">"year"</span>)
 );
 <span class="comment">//Next SQL sentence is sent to the database system
</span> <span class="identifier">INSERT</span> <span class="identifier">INTO</span> `<span class="identifier">robots</span>` (`<span class="identifier">name</span>`, `<span class="identifier">year</span>`) <span class="identifier">VALUES</span> (<span class="string">"Astro boy"</span>, <span class="number">1952</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$values' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$fields' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$automaticQuotes' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'update' => 
      array (
        'description' => 'Updates data on a table using custom RBDM SQL syntax
 <pre class="source-code iphp"><span class="comment">//Updating existing robot
</span> <span class="tag">$<span class="identifier">success</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">update</span>(
     <span class="string">"robots"</span>,
     <span class="keyword builtin">array</span>(<span class="string">"name"</span>)
     <span class="keyword builtin">array</span>(<span class="string">"New Astro Boy"</span>),
     <span class="string">"id = 101"</span>
 );
 <span class="comment">//Next SQL sentence is sent to the database system
</span> <span class="identifier">UPDATE</span> `<span class="identifier">robots</span>` <span class="identifier">SET</span> `<span class="identifier">name</span>` = <span class="string">"Astro boy"</span> <span class="identifier">WHERE</span> <span class="identifier">id</span> = <span class="number">101</span></pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$fields' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$values' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$whereCondition' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$automaticQuotes' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'delete' => 
      array (
        'description' => 'Deletes data from a table using custom RBDM SQL syntax
 <pre class="source-code iphp"><span class="comment">//Deleting existing robot
</span> <span class="tag">$<span class="identifier">success</span></span> = <span class="tag">$<span class="identifier">connection</span></span>-&gt;<span class="identifier">delete</span>(
     <span class="string">"robots"</span>,
     <span class="string">"id = 101"</span>
 );
 <span class="comment">//Next SQL sentence is generated
</span> <span class="identifier">DELETE</span> <span class="identifier">FROM</span> `<span class="identifier">robots</span>` <span class="identifier">WHERE</span> <span class="identifier">id</span> = <span class="number">101</span></pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$whereCondition' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => '',
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'begin' => 
      array (
        'description' => 'Starts a transaction in the connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'rollback' => 
      array (
        'description' => 'Rollbacks the active transaction in the connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'commit' => 
      array (
        'description' => 'Commits the active transaction in the connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'setUnderTransaction' => 
      array (
        'description' => 'Manually sets a "under transaction" state for the connection',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$underTransaction' => 
          array (
            'type' => 'boolean',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'isUnderTransaction' => 
      array (
        'description' => 'Checks whether connection is under database transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getHaveAutoCommit' => 
      array (
        'description' => 'Checks whether connection have auto commit',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getDatabaseName' => 
      array (
        'description' => 'Returns database name in the internal connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getDefaultSchema' => 
      array (
        'description' => 'Returns active schema name in the internal connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getUsername' => 
      array (
        'description' => 'Returns the username which has connected to the database',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getHostName' => 
      array (
        'description' => 'Returns the username which has connected to the database',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      '_beforeQuery' => 
      array (
        'description' => 'This method is executed before every SQL statement sent to the database system',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$sqlStatement' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_afterQuery' => 
      array (
        'description' => 'This method is executed after every SQL statement sent to the database system',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$sqlStatement' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'factory' => 
      array (
        'description' => 'Instantiates Phalcon_Db adapter using given parameters',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$adapterName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'stdClass',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Db_Adapter_Mysql|Phalcon_Db_Adapter_Postgresql',
      ),
    ),
  ),
  'Phalcon_Dispatcher_Exception' => 
  array (
    'description' => 'Exceptions thrown in Phalcon_Dispatcher will use this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Dispatcher' => 
  array (
    'description' => 'Dispatching is the process of taking the request object, extracting the module name,
 controller name, action name, and optional parameters contained in it, and then
 instantiating a controller and calling an action of that controller.

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">dispatcher</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Dispatcher</span>();

<span class="tag">$<span class="identifier">request</span></span> = <span class="identifier">Phalcon_Request</span>::<span class="identifier">getInstance</span>();
<span class="tag">$<span class="identifier">response</span></span> = <span class="identifier">Phalcon_Response</span>::<span class="identifier">getInstance</span>();

<span class="tag">$<span class="identifier">dispatcher</span></span>-&gt;<span class="identifier">setBasePath</span>(<span class="string">\'./\'</span>);
<span class="tag">$<span class="identifier">dispatcher</span></span>-&gt;<span class="identifier">setControllersDir</span>(<span class="string">\'tests/controllers/\'</span>);

<span class="tag">$<span class="identifier">dispatcher</span></span>-&gt;<span class="identifier">setControllerName</span>(<span class="string">\'posts\'</span>);
<span class="tag">$<span class="identifier">dispatcher</span></span>-&gt;<span class="identifier">setActionName</span>(<span class="string">\'index\'</span>);
<span class="tag">$<span class="identifier">dispatcher</span></span>-&gt;<span class="identifier">setParams</span>(<span class="keyword builtin">array</span>());
<span class="tag">$<span class="identifier">controller</span></span> = <span class="tag">$<span class="identifier">dispatcher</span></span>-&gt;<span class="identifier">dispatch</span>(<span class="tag">$<span class="identifier">request</span></span>, <span class="tag">$<span class="identifier">response</span></span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'setControllersDir' => 
      array (
        'description' => 'Sets default controllers directory. Depending of your platform, always add a trailing slash or backslash',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$controllersDir' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getControllersDir' => 
      array (
        'description' => 'Gets active controllers directory',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setBasePath' => 
      array (
        'description' => 'Sets base path for controllers dir. Depending of your platform, always add a trailing slash or backslash',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$basePath' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getBasePath' => 
      array (
        'description' => 'Gets base path for controllers dir',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setDefaultController' => 
      array (
        'description' => 'Sets the default controller name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$controllerName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setDefaultAction' => 
      array (
        'description' => 'Sets the default action name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$actionName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setControllerName' => 
      array (
        'description' => 'Sets the controller name to be dispatched',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$controllerName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getControllerName' => 
      array (
        'description' => 'Gets last dispatched controller name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setActionName' => 
      array (
        'description' => 'Sets the action name to be dispatched',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$actionName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getActionName' => 
      array (
        'description' => 'Gets last dispatched action name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setParams' => 
      array (
        'description' => 'Sets action params to be dispatched',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$params' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getParams' => 
      array (
        'description' => 'Gets action params',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'setParam' => 
      array (
        'description' => 'Set a param by its name or numeric index',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$param' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getParam' => 
      array (
        'description' => 'Gets a param by its name or numeric index',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$param' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'dispatch' => 
      array (
        'description' => 'Dispatches a controller action taking into account the routing parameters',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$request' => 
          array (
            'type' => 'Phalcon_Request',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$response' => 
          array (
            'type' => 'Phalcon_Response',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$view' => 
          array (
            'type' => 'Phalcon_View',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Manager',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Controller',
      ),
      '_throwDispatchException' => 
      array (
        'description' => 'Throws an internal exception',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$response' => 
          array (
            'type' => 'Phalcon_Response',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'forward' => 
      array (
        'description' => 'Routes to a controller/action using a string or array uri',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$uri' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'isFinished' => 
      array (
        'description' => 'Checks if the dispatch loop is finished or have more pendent controller to disptach',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getControllers' => 
      array (
        'description' => 'Returns all instantiated controllers whitin the dispatcher',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getLastController' => 
      array (
        'description' => 'Returns last dispatched controller',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Controller',
      ),
      'getReturnedValue' => 
      array (
        'description' => 'Returns value returned by last dispacthed action',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'mixed',
      ),
    ),
  ),
  'Phalcon_Exception' => 
  array (
    'description' => 'All framework exceptions should use this exception',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Filter' => 
  array (
    'description' => 'The Phalcon_Filter component provides a set of commonly needed data filters. It provides
 object oriented wrappers to the php filter extension

<pre class="source-code iphp"><span class="tag">$<span class="identifier">filter</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Filter</span>();
<span class="tag">$<span class="identifier">filter</span></span>-&gt;<span class="identifier">sanitize</span>(<span class="string">"some(one)@exa\\\\mple.com"</span>, <span class="string">"email"</span>); <span class="comment">// returns "someone@example.com"
</span><span class="tag">$<span class="identifier">filter</span></span>-&gt;<span class="identifier">sanitize</span>(<span class="string">"hello&lt;&lt;"</span>, <span class="string">"string"</span>); <span class="comment">// returns "hello"
</span><span class="tag">$<span class="identifier">filter</span></span>-&gt;<span class="identifier">sanitize</span>(<span class="string">"!100a019"</span>, <span class="string">"int"</span>); <span class="comment">// returns "100019"
</span><span class="tag">$<span class="identifier">filter</span></span>-&gt;<span class="identifier">sanitize</span>(<span class="string">"!100a019.01a"</span>, <span class="string">"float"</span>); // <span class="identifier">returns</span> <span class="string">"100019.01"</span></pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'sanitize' => 
      array (
        'description' => 'Sanizites a value with a specified single or set of filters',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$value' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$filters' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$silent' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'filter' => 
      array (
        'description' => 'Filters a value with a specified single or set of filters',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$value' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$filters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$silent' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'sanitizeAndFilter' => 
      array (
        'description' => 'Sanitize and Filter a value with a specified single or set of filters',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$value' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$filters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      '_sanitize' => 
      array (
        'description' => 'Internal sanizite wrapper to filter_var',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$value' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$filter' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$silent' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      '_filter' => 
      array (
        'description' => 'Internal filter function',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$value' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$filter' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$silent' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
    ),
  ),
  'Phalcon_Flash' => 
  array (
    'description' => 'Shows HTML notifications related to different circumstances. Classes can be stylized using CSS

<pre class="source-code iphp"><span class="identifier">Phalcon_Flash</span>::<span class="identifier">success</span>(<span class="string">"The record was successfully deleted"</span>);
<span class="identifier">Phalcon_Flash</span>::<span class="identifier">error</span>(<span class="string">"Cannot open the file"</span>);
<span class="identifier">Phalcon_Flash</span>::<span class="identifier">error</span>(<span class="string">"Cannot open the file"</span>, <span class="string">"alert alert-error"</span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'abstract',
    'methods' => 
    array (
      'error' => 
      array (
        'description' => 'Shows a HTML error message
 <pre class="source-code iphp"><span class="identifier">Phalcon_Flash</span>::<span class="identifier">error</span>(<span class="string">\'This is an error\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$classes' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => 'errorMessage',
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'notice' => 
      array (
        'description' => 'Shows a HTML notice/information message
 <pre class="source-code iphp"><span class="identifier">Phalcon_Flash</span>::<span class="identifier">notice</span>(<span class="string">\'This is an information\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$classes' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => 'noticeMessage',
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'success' => 
      array (
        'description' => 'Shows a HTML success message
 <pre class="source-code iphp"><span class="identifier">Phalcon_Flash</span>::<span class="identifier">success</span>(<span class="string">\'The process was finished successfully\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$classes' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => 'successMessage',
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'warning' => 
      array (
        'description' => 'Shows a HTML warning message
 <pre class="source-code iphp"><span class="identifier">Phalcon_Flash</span>::<span class="identifier">warning</span>(<span class="string">\'Hey, this is important\'</span>);</pre>
 <pre class="source-code iphp"><span class="identifier">Phalcon_Flash</span>::<span class="identifier">warning</span>(<span class="string">\'Hey, this is important\'</span>, <span class="string">\'alert alert-warning\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$classes' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => 'warningMessage',
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Loader_Exception' => 
  array (
    'description' => 'Exceptions thrown in Phalcon_Loader will use this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Loader' => 
  array (
    'description' => 'This component helps to load your project classes automatically based on some conventions

<pre class="source-code iphp"><span class="comment">//Creates the autoloader
</span> <span class="tag">$<span class="identifier">loader</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Loader</span>();

 <span class="comment">//Register some namespaces
</span> <span class="tag">$<span class="identifier">loader</span></span>-&gt;<span class="identifier">registerNamespaces</span>(<span class="keyword builtin">array</span>(
   <span class="string">\'Example\\\\Base\'</span> =&gt; <span class="string">\'vendor/example/base/\'</span>,
   <span class="string">\'Example\\\\Adapter\'</span> =&gt; <span class="string">\'vendor/example/adapter/\'</span>,
   <span class="string">\'Example\'</span> =&gt; <span class="string">\'vendor/example/\'</span>
 ));

 <span class="comment">//register autoloader
</span> <span class="tag">$<span class="identifier">loader</span></span>-&gt;<span class="identifier">register</span>();

 <span class="comment">//Requiring class will automatically include file vendor/example/adapter/Some.php
</span> <span class="tag">$<span class="identifier">adapter</span></span> = <span class="identifier">Example</span>\\<span class="identifier">Adapter</span>\\<span class="identifier">Some</span>();</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'registerNamespaces' => 
      array (
        'description' => 'Register namespaces and their related directories',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$namespaces' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'registerDirs' => 
      array (
        'description' => 'Register directories on which "not found" classes could be found',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$directories' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'registerClasses' => 
      array (
        'description' => 'Register classes and their locations',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$classes' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'register' => 
      array (
        'description' => 'Register the autoload method',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'autoLoad' => 
      array (
        'description' => 'Makes the work of autoload registered classes',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$className' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
    ),
  ),
  'Phalcon_Logger_Adapter_File' => 
  array (
    'description' => 'Adapter to store logs in plain text files

<pre class="source-code iphp"><span class="tag">$<span class="identifier">logger</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Logger</span>(<span class="string">"File"</span>, <span class="string">"app/logs/test.log"</span>);
<span class="tag">$<span class="identifier">logger</span></span>-&gt;<span class="identifier">log</span>(<span class="string">"This is a message"</span>);
<span class="tag">$<span class="identifier">logger</span></span>-&gt;<span class="identifier">log</span>(<span class="string">"This is an error"</span>, <span class="identifier">Phalcon_Logger</span>::<span class="identifier">ERROR</span>);
<span class="tag">$<span class="identifier">logger</span></span>-&gt;<span class="identifier">error</span>(<span class="string">"This is another error"</span>);
<span class="tag">$<span class="identifier">logger</span></span>-&gt;<span class="identifier">close</span>();</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Logger_Adapter_File constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setFormat' => 
      array (
        'description' => 'Set the log format',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$format' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getFormat' => 
      array (
        'description' => 'Returns the log format',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$format' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getTypeString' => 
      array (
        'description' => 'Returns the string meaning of a logger constant',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$type' => 
          array (
            'type' => 'integer',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      '_applyFormat' => 
      array (
        'description' => 'Applies the internal format to the message',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$type' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$time' => 
          array (
            'type' => 'int',
            'optional' => true,
            'default' => 0,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'setDateFormat' => 
      array (
        'description' => 'Sets the internal date format',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$date' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getDateFormat' => 
      array (
        'description' => 'Returns the internal date format',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'log' => 
      array (
        'description' => 'Sends/Writes messages to the file log',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$type' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'begin' => 
      array (
        'description' => 'Starts a transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'commit' => 
      array (
        'description' => 'Commits the internal transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'rollback' => 
      array (
        'description' => 'Rollbacks the internal transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'close' => 
      array (
        'description' => 'Closes the logger',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      '__wakeup' => 
      array (
        'description' => 'Opens the internal file handler after unserialization',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Logger_Exception' => 
  array (
    'description' => 'Exceptions thrown in Phalcon_Logger will use this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Logger_Item' => 
  array (
    'description' => 'Represents each item in a logger transaction',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Logger_Item contructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$type' => 
          array (
            'type' => 'integer',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$time' => 
          array (
            'type' => 'integer',
            'optional' => true,
            'default' => 0,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getMessage' => 
      array (
        'description' => 'Returns the message',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getType' => 
      array (
        'description' => 'Returns the log type',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'integer',
      ),
      'getTime' => 
      array (
        'description' => 'Returns log timestamp',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'integer',
      ),
    ),
  ),
  'Phalcon_Logger' => 
  array (
    'description' => 'Phalcon_Logger is a component whose purpose is to create logs using
 different backends via adapters, generating options, formats and filters
 also implementing transactions.

<pre class="source-code iphp"><span class="tag">$<span class="identifier">logger</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Logger</span>(<span class="string">"File"</span>, <span class="string">"app/logs/test.log"</span>);
<span class="tag">$<span class="identifier">logger</span></span>-&gt;<span class="identifier">log</span>(<span class="string">"This is a message"</span>);
<span class="tag">$<span class="identifier">logger</span></span>-&gt;<span class="identifier">log</span>(<span class="string">"This is an error"</span>, <span class="identifier">Phalcon_Logger</span>::<span class="identifier">ERROR</span>);
<span class="tag">$<span class="identifier">logger</span></span>-&gt;<span class="identifier">error</span>(<span class="string">"This is another error"</span>);
<span class="tag">$<span class="identifier">logger</span></span>-&gt;<span class="identifier">close</span>();</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
      'SPECIAL' => 9,
      'CUSTOM' => 8,
      'DEBUG' => 7,
      'INFO' => 6,
      'NOTICE' => 5,
      'WARNING' => 4,
      'ERROR' => 3,
      'ALERT' => 2,
      'CRITICAL' => 1,
      'EMERGENCE' => 0,
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Logger constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$adapter' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => 'File',
            'byReference' => false,
          ),
          '$name' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'log' => 
      array (
        'description' => 'Sends/Writes a message to the log',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$type' => 
          array (
            'type' => 'ing',
            'optional' => true,
            'default' => 7,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'debug' => 
      array (
        'description' => 'Sends/Writes a debug message to the log',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'error' => 
      array (
        'description' => 'Sends/Writes an error message to the log',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'info' => 
      array (
        'description' => 'Sends/Writes an info message to the log',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'notice' => 
      array (
        'description' => 'Sends/Writes a notice message to the log',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'warning' => 
      array (
        'description' => 'Sends/Writes a warning message to the log',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'alert' => 
      array (
        'description' => 'Sends/Writes an alert message to the log',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '__call' => 
      array (
        'description' => 'Pass any call to the internal adapter object',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$method' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$arguments' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
    ),
  ),
  'Phalcon_Model_Base' => 
  array (
    'description' => '<p>Phalcon_Model connects business objects and database tables to create
 a persistable domain model where logic and data are presented in one wrapping.
 It‘s an implementation of the object- relational mapping (ORM).</p>

 <p>A model represents the information (data) of the application and the rules to manipulate that data.
 Models are primarily used for managing the rules of interaction with a corresponding database table.
 In most cases, each table in your database will correspond to one model in your application.
 The bulk of your application’s business logic will be concentrated in the models.</p>

 <p>Phalcon_Model is the first ORM written in C-language for PHP, giving to developers high performance
 when interact with databases while is also easy to use.</p>

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">manager</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Manager</span>();
<span class="tag">$<span class="identifier">manager</span></span>-&gt;<span class="identifier">setModelsDir</span>(<span class="string">\'app/models/\'</span>);

<span class="tag">$<span class="identifier">robot</span></span> = <span class="keyword operator">new</span> <span class="identifier">Robots</span>();
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">type</span> = <span class="string">\'mechanical\'</span>
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span> = <span class="string">\'Astro Boy\'</span>;
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">year</span> = <span class="number">1952</span>;
<span class="keyword">if</span> (<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">save</span>() == <span class="keyword literal">false</span>) {
  <span class="keyword builtin">echo</span> <span class="string">"Umh, We can store robots: "</span>;
  <span class="keyword">foreach</span> (<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">getMessages</span>() <span class="keyword operator">as</span> <span class="tag">$<span class="identifier">message</span></span>) {
    <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">message</span></span>;
  }
} <span class="keyword">else</span> {
  <span class="keyword builtin">echo</span> <span class="string">"Great, a new robot was saved successfully!"</span>;
}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
      'OP_CREATE' => 1,
      'OP_UPDATE' => 2,
      'OP_DELETE' => 3,
    ),
    'type' => 'abstract',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Model_Base constructor',
        'modifiers' => 
        array (
          0 => 'final',
          1 => 'public',
        ),
        'parameters' => 
        array (
          '$manager' => 
          array (
            'type' => 'Phalcon_Model_Manager',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setManager' => 
      array (
        'description' => 'Overwrites default model manager',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$manager' => 
          array (
            'type' => 'Phalcon_Model_Manager',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getManager' => 
      array (
        'description' => 'Returns internal models manager',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Model_Manager',
      ),
      '_connect' => 
      array (
        'description' => 'Internal method to create a connection. Automatically dumps mapped table meta-data',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'getAttributes' => 
      array (
        'description' => 'Return an array with the attributes names',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getPrimaryKeyAttributes' => 
      array (
        'description' => 'Returns an array of attributes that are part of the related table primary key',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getNonPrimaryKeyAttributes' => 
      array (
        'description' => 'Returns an array of attributes that aren\'t part of the primary key',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getNotNullAttributes' => 
      array (
        'description' => 'Returns an array of not-nullable attributes',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getDataTypesNumeric' => 
      array (
        'description' => 'Returns an array of numeric attributes',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getDataTypes' => 
      array (
        'description' => 'Returns an array of data-types attributes',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getIdentityField' => 
      array (
        'description' => 'Returns the name of the identity field',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'dump' => 
      array (
        'description' => 'Dumps mapped table meta-data',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Model_Base',
      ),
      '_createSQLSelect' => 
      array (
        'description' => 'Creates SQL statement which returns many rows',
        'modifiers' => 
        array (
          0 => 'protected',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$manager' => 
          array (
            'type' => 'Phalcon_Manager',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$connection' => 
          array (
            'type' => 'Phalcon_Db',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$params' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      '_getOrCreateResultset' => 
      array (
        'description' => 'Gets a resulset from the cache or creates one',
        'modifiers' => 
        array (
          0 => 'protected',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$manager' => 
          array (
            'type' => 'Phalcon_Model_Manager',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$connection' => 
          array (
            'type' => 'Phalcon_Db',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$params' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$unique' => 
          array (
            'type' => 'boolean',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setTransaction' => 
      array (
        'description' => 'Sets a transaction related to the Model instance
<pre class="source-code iphp"><span class="keyword">try</span> {
  <span class="tag">$<span class="identifier">transaction</span></span> = <span class="identifier">Phalcon_Transaction_Manager</span>::<span class="identifier">get</span>();
  <span class="tag">$<span class="identifier">robot</span></span> = <span class="keyword operator">new</span> <span class="identifier">Robots</span>();
  <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">setTransaction</span>(<span class="tag">$<span class="identifier">transaction</span></span>);
  <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span> = <span class="string">\'WALL·E\'</span>;
  <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">created_at</span> = <span class="identifier">date</span>(<span class="string">\'Y-m-d\'</span>);
  <span class="keyword">if</span>(<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">save</span>()==<span class="keyword literal">false</span>){
    <span class="tag">$<span class="identifier">transaction</span></span>-&gt;<span class="identifier">rollback</span>(<span class="string">"Can\'t save robot"</span>);
  }
  <span class="tag">$<span class="identifier">robotPart</span></span> = <span class="keyword operator">new</span> <span class="identifier">RobotParts</span>();
  <span class="tag">$<span class="identifier">robotPart</span></span>-&gt;<span class="identifier">setTransaction</span>(<span class="tag">$<span class="identifier">transaction</span></span>);
  <span class="tag">$<span class="identifier">robotPart</span></span>-&gt;<span class="identifier">type</span> = <span class="string">\'head\'</span>;
  <span class="keyword">if</span>(<span class="tag">$<span class="identifier">robotPart</span></span>-&gt;<span class="identifier">save</span>()==<span class="keyword literal">false</span>){
    <span class="tag">$<span class="identifier">transaction</span></span>-&gt;<span class="identifier">rollback</span>(<span class="string">"Can\'t save robot part"</span>);
  }
  <span class="tag">$<span class="identifier">transaction</span></span>-&gt;<span class="identifier">commit</span>();
}
<span class="keyword">catch</span>(<span class="identifier">Phalcon_Transaction_Failed</span> <span class="tag">$<span class="identifier">e</span></span>){
  <span class="keyword builtin">echo</span> <span class="string">\'Failed, reason: \'</span>, <span class="tag">$<span class="identifier">e</span></span>-&gt;<span class="identifier">getMessage</span>();
}</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$transaction' => 
          array (
            'type' => 'Phalcon_Transaction',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'isView' => 
      array (
        'description' => 'Checks wheter model is mapped to a database view',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'setSource' => 
      array (
        'description' => 'Sets table name which model should be mapped',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$source' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getSource' => 
      array (
        'description' => 'Returns table name mapped in the model',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setSchema' => 
      array (
        'description' => 'Sets schema name where table mapped is located',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$schema' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getSchema' => 
      array (
        'description' => 'Returns schema name where table mapped is located',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setConnection' => 
      array (
        'description' => 'Overwrites internal Phalcon_Db connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$connection' => 
          array (
            'type' => 'Phalcon_Db',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getConnection' => 
      array (
        'description' => 'Gets internal Phalcon_Db connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Db',
      ),
      'dumpResult' => 
      array (
        'description' => 'Assigns values to a model from an array returning a new model
<pre class="source-code iphp"><span class="tag">$<span class="identifier">robot</span></span> = <span class="identifier">Phalcon_Model_Base</span>::<span class="identifier">dumpResult</span>(<span class="keyword operator">new</span> <span class="identifier">Robots</span>(), <span class="keyword builtin">array</span>(
  <span class="string">\'type\'</span> =&gt; <span class="string">\'mechanical\'</span>,
  <span class="string">\'name\'</span> =&gt; <span class="string">\'Astro Boy\'</span>,
  <span class="string">\'year\'</span> =&gt; <span class="number">1952</span>
));</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$base' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$result' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Model_Base $result',
      ),
      'find' => 
      array (
        'description' => 'Allows to query a set of records that match the specified conditions
 <pre class="source-code iphp"><span class="comment">//How many robots are there?
</span> <span class="tag">$<span class="identifier">robots</span></span> = <span class="identifier">Robots</span>::<span class="identifier">find</span>();
 <span class="keyword builtin">echo</span> <span class="string">"There are "</span>, <span class="identifier">count</span>(<span class="tag">$<span class="identifier">robots</span></span>);
 <span class="comment">//How many mechanical robots are there?
</span> <span class="tag">$<span class="identifier">robots</span></span> = <span class="identifier">Robots</span>::<span class="identifier">find</span>(<span class="string">"type=\'mechanical\'"</span>);
 <span class="keyword builtin">echo</span> <span class="string">"There are "</span>, <span class="identifier">count</span>(<span class="tag">$<span class="identifier">robots</span></span>);
 <span class="comment">//Get and print virtual robots ordered by name
</span> <span class="tag">$<span class="identifier">robots</span></span> = <span class="identifier">Robots</span>::<span class="identifier">find</span>(<span class="keyword builtin">array</span>(<span class="string">"type=\'virtual\'"</span>, <span class="string">"order"</span> =&gt; <span class="string">"name"</span>));
 <span class="keyword">foreach</span>(<span class="tag">$<span class="identifier">robots</span></span> <span class="keyword operator">as</span> <span class="tag">$<span class="identifier">robot</span></span>){
	   <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span>, <span class="string">"\\n"</span>;
 }
 <span class="comment">//Get first 100 virtual robots ordered by name
</span> <span class="tag">$<span class="identifier">robots</span></span> = <span class="identifier">Robots</span>::<span class="identifier">find</span>(<span class="keyword builtin">array</span>(<span class="string">"type=\'virtual\'"</span>, <span class="string">"order"</span> =&gt; <span class="string">"name"</span>, <span class="string">"limit"</span> =&gt; <span class="number">100</span>));
 <span class="keyword">foreach</span>(<span class="tag">$<span class="identifier">robots</span></span> <span class="keyword operator">as</span> <span class="tag">$<span class="identifier">robot</span></span>){
	   <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span>, <span class="string">"\\n"</span>;
 }</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Model_Resultset',
      ),
      'findFirst' => 
      array (
        'description' => 'Allows to query the first record that match the specified conditions
 <pre class="source-code iphp"><span class="comment">//What\'s the first robot in robots table?
</span> <span class="tag">$<span class="identifier">robot</span></span> = <span class="identifier">Robots</span>::<span class="identifier">findFirst</span>();
 <span class="keyword builtin">echo</span> <span class="string">"The robot name is "</span>, <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span>;
 <span class="comment">//What\'s the first mechanical robot in robots table?
</span> <span class="tag">$<span class="identifier">robot</span></span> = <span class="identifier">Robots</span>::<span class="identifier">findFirst</span>(<span class="string">"type=\'mechanical\'"</span>);
 <span class="keyword builtin">echo</span> <span class="string">"The first mechanical robot name is "</span>, <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span>;
 <span class="comment">//Get first virtual robot ordered by name
</span> <span class="tag">$<span class="identifier">robot</span></span> = <span class="identifier">Robots</span>::<span class="identifier">findFirst</span>(<span class="keyword builtin">array</span>(<span class="string">"type=\'virtual\'"</span>, <span class="string">"order"</span> =&gt; <span class="string">"name"</span>));
 <span class="keyword builtin">echo</span> <span class="string">"The first virtual robot name is "</span>, <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span>;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Model_Base',
      ),
      '_exists' => 
      array (
        'description' => 'Checks if the current record already exists or not',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$connection' => 
          array (
            'type' => 'Phalcon_Db',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      '_prepareGroupResult' => 
      array (
        'description' => 'Generate a SQL SELECT statement for an aggregate',
        'modifiers' => 
        array (
          0 => 'protected',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$function' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$alias' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_getGroupResult' => 
      array (
        'description' => 'Generate a resulset from an aggreate SQL select',
        'modifiers' => 
        array (
          0 => 'protected',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$connection' => 
          array (
            'type' => 'Phalcon_Db',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$params' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$sqlSelect' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$alias' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array|Phalcon_Model_Resultset',
      ),
      'count' => 
      array (
        'description' => 'Allows to count how many records match the specified conditions
 <pre class="source-code iphp"><span class="comment">//How many robots are there?
</span> <span class="tag">$<span class="identifier">number</span></span> = <span class="identifier">Robots</span>::<span class="identifier">count</span>();
 <span class="keyword builtin">echo</span> <span class="string">"There are "</span>, <span class="tag">$<span class="identifier">number</span></span>;
 <span class="comment">//How many mechanical robots are there?
</span> <span class="tag">$<span class="identifier">number</span></span> = <span class="identifier">Robots</span>::<span class="identifier">count</span>(<span class="string">"type=\'mechanical\'"</span>);
 <span class="keyword builtin">echo</span> <span class="string">"There are "</span>, <span class="tag">$<span class="identifier">number</span></span>, <span class="string">" mechanical robots"</span>;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'int',
      ),
      'sum' => 
      array (
        'description' => 'Allows to a calculate a summatory on a column that match the specified conditions
 <pre class="source-code iphp"><span class="comment">//How much are all robots?
</span> <span class="tag">$<span class="identifier">sum</span></span> = <span class="identifier">Robots</span>::<span class="identifier">sum</span>(<span class="keyword builtin">array</span>(<span class="string">\'column\'</span> =&gt; <span class="string">\'price\'</span>));
 <span class="keyword builtin">echo</span> <span class="string">"The total price of robots is "</span>, <span class="tag">$<span class="identifier">sum</span></span>;
 <span class="comment">//How much are mechanical robots?
</span> <span class="tag">$<span class="identifier">sum</span></span> = <span class="identifier">Robots</span>::<span class="identifier">sum</span>(<span class="keyword builtin">array</span>(<span class="string">"type=\'mechanical\'"</span>, <span class="string">\'column\'</span> =&gt; <span class="string">\'price\'</span>));
 <span class="keyword builtin">echo</span> <span class="string">"The total price of mechanical robots is  "</span>, <span class="tag">$<span class="identifier">sum</span></span>;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'double',
      ),
      'maximum' => 
      array (
        'description' => 'Allows to get the maximum value of a column that match the specified conditions
 <pre class="source-code iphp"><span class="comment">//What is the maximum robot id?
</span> <span class="tag">$<span class="identifier">id</span></span> = <span class="identifier">Robots</span>::<span class="identifier">maximum</span>(<span class="keyword builtin">array</span>(<span class="string">\'column\'</span> =&gt; <span class="string">\'id\'</span>));
 <span class="keyword builtin">echo</span> <span class="string">"The maximum robot id is: "</span>, <span class="tag">$<span class="identifier">id</span></span>;
 <span class="comment">//What is the maximum id of mechanical robots?
</span> <span class="tag">$<span class="identifier">sum</span></span> = <span class="identifier">Robots</span>::<span class="identifier">maximum</span>(<span class="keyword builtin">array</span>(<span class="string">"type=\'mechanical\'"</span>, <span class="string">\'column\'</span> =&gt; <span class="string">\'id\'</span>));
 <span class="keyword builtin">echo</span> <span class="string">"The maximum robot id of mechanical robots is "</span>, <span class="tag">$<span class="identifier">id</span></span>;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'minimum' => 
      array (
        'description' => 'Allows to get the minimum value of a column that match the specified conditions
 <pre class="source-code iphp"><span class="comment">//What is the minimum robot id?
</span> <span class="tag">$<span class="identifier">id</span></span> = <span class="identifier">Robots</span>::<span class="identifier">minimum</span>(<span class="keyword builtin">array</span>(<span class="string">\'column\'</span> =&gt; <span class="string">\'id\'</span>));
 <span class="keyword builtin">echo</span> <span class="string">"The minimum robot id is: "</span>, <span class="tag">$<span class="identifier">id</span></span>;
 <span class="comment">//What is the minimum id of mechanical robots?
</span> <span class="tag">$<span class="identifier">sum</span></span> = <span class="identifier">Robots</span>::<span class="identifier">minimum</span>(<span class="keyword builtin">array</span>(<span class="string">"type=\'mechanical\'"</span>, <span class="string">\'column\'</span> =&gt; <span class="string">\'id\'</span>));
 <span class="keyword builtin">echo</span> <span class="string">"The minimum robot id of mechanical robots is "</span>, <span class="tag">$<span class="identifier">id</span></span>;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'average' => 
      array (
        'description' => 'Allows to calculate the average value on a column matching the specified conditions
 <pre class="source-code iphp"><span class="comment">//What\'s the average price of robots?
</span> <span class="tag">$<span class="identifier">average</span></span> = <span class="identifier">Robots</span>::<span class="identifier">average</span>(<span class="keyword builtin">array</span>(<span class="string">\'column\'</span> =&gt; <span class="string">\'price\'</span>));
 <span class="keyword builtin">echo</span> <span class="string">"The average price is "</span>, <span class="tag">$<span class="identifier">average</span></span>;
 <span class="comment">//What\'s the average price of mechanical robots?
</span> <span class="tag">$<span class="identifier">average</span></span> = <span class="identifier">Robots</span>::<span class="identifier">average</span>(<span class="keyword builtin">array</span>(<span class="string">"type=\'mechanical\'"</span>, <span class="string">\'column\'</span> =&gt; <span class="string">\'price\'</span>));
 <span class="keyword builtin">echo</span> <span class="string">"The average price of mechanical robots is "</span>, <span class="tag">$<span class="identifier">average</span></span>;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'double',
      ),
      '_callEvent' => 
      array (
        'description' => 'Fires an internal event',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$eventName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      '_cancelOperation' => 
      array (
        'description' => 'Cancel the current operation',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'appendMessage' => 
      array (
        'description' => 'Appends a customized message on the validation process
 <pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Robots</span> <span class="identifier">extens</span> <span class="identifier">Phalcon_Model_Base</span> {
   <span class="keyword">function</span> <span class="identifier">beforeSave</span>(){
     <span class="keyword">if</span>(<span class="keyword literal">this</span>-&gt;<span class="identifier">name</span>==<span class="string">\'Peter\'</span>){
        <span class="tag">$<span class="identifier">message</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Message</span>(<span class="string">"Sorry, but a robot cannot be named Peter"</span>);
        <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">appendMessage</span>(<span class="tag">$<span class="identifier">message</span></span>);
     }
   }
 }</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'Phalcon_Model_Message',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'validate' => 
      array (
        'description' => 'Executes validators on every validation call
<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Subscriptors</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Model_Base</span> {
	<span class="keyword">function</span> <span class="identifier">validation</span>(){
 		<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validate</span>(<span class="string">\'ExclusionIn\'</span>, <span class="keyword builtin">array</span>(
			<span class="string">\'field\'</span> =&gt; <span class="string">\'status\'</span>,
			<span class="string">\'domain\'</span> =&gt; <span class="keyword builtin">array</span>(<span class="string">\'A\'</span>, <span class="string">\'I\'</span>)
		));
		<span class="keyword">if</span>(<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validationHasFailed</span>()==<span class="keyword literal">true</span>){
			<span class="keyword">return</span> <span class="keyword literal">false</span>;
		}
	}
}</pre>',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$validatorClass' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'validationHasFailed' => 
      array (
        'description' => 'Check whether validation process has generated any messages
<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Subscriptors</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Model_Base</span> {
	<span class="keyword">function</span> <span class="identifier">validation</span>(){
 		<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validate</span>(<span class="string">\'ExclusionIn\'</span>, <span class="keyword builtin">array</span>(
			<span class="string">\'field\'</span> =&gt; <span class="string">\'status\'</span>,
			<span class="string">\'domain\'</span> =&gt; <span class="keyword builtin">array</span>(<span class="string">\'A\'</span>, <span class="string">\'I\'</span>)
		));
		<span class="keyword">if</span>(<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validationHasFailed</span>()==<span class="keyword literal">true</span>){
			<span class="keyword">return</span> <span class="keyword literal">false</span>;
		}
	}
}</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getMessages' => 
      array (
        'description' => 'Returns all the validation messages
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">robot</span></span> = <span class="keyword operator">new</span> <span class="identifier">Robots</span>();
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">type</span> = <span class="string">\'mechanical\'</span>;
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span> = <span class="string">\'Astro Boy\'</span>;
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">year</span> = <span class="number">1952</span>;
<span class="keyword">if</span> (<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">save</span>() == <span class="keyword literal">false</span>) {
  <span class="keyword builtin">echo</span> <span class="string">"Umh, We can\'t store robots right now "</span>;
  <span class="keyword">foreach</span> (<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">getMessages</span>() <span class="keyword operator">as</span> <span class="tag">$<span class="identifier">message</span></span>) {
    <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">message</span></span>;
  }
} <span class="keyword">else</span> {
  <span class="keyword builtin">echo</span> <span class="string">"Great, a new robot was saved successfully!"</span>;
}</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Model_Message[]',
      ),
      '_checkForeignKeys' => 
      array (
        'description' => 'Reads "belongs to" relations and check the virtual foreign keys when inserting or updating records',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      '_checkForeignKeysReverse' => 
      array (
        'description' => 'Reads both "hasMany" and "hasOne" relations and check the virtual foreign keys when deleting records',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      '_preSave' => 
      array (
        'description' => 'Executes internal events before save a record',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$disableEvents' => 
          array (
            'type' => 'boolean',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$exists' => 
          array (
            'type' => 'boolean',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$identityField' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      '_postSave' => 
      array (
        'description' => 'Executes internal events after save a record',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$disableEvents' => 
          array (
            'type' => 'boolean',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$success' => 
          array (
            'type' => 'boolean',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$exists' => 
          array (
            'type' => 'boolean',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      '_doLowInsert' => 
      array (
        'description' => 'Sends a pre-build INSET SQL statement to the relational database system',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$connection' => 
          array (
            'type' => 'Phalcon_Db',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$dataType' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$dataTypeNumeric' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$identityField' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      '_doLowUpdate' => 
      array (
        'description' => 'Sends a pre-build UPDATE SQL statement to the relational database system',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$connection' => 
          array (
            'type' => 'Phalcon_Db',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$table' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$dataType' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$dataTypeNumeric' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'save' => 
      array (
        'description' => 'Inserts or updates a model instance. Returning true on success or false otherwise.
 <pre class="source-code iphp"><span class="comment">//Creating a new robot
</span><span class="tag">$<span class="identifier">robot</span></span> = <span class="keyword operator">new</span> <span class="identifier">Robots</span>();
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">type</span> = <span class="string">\'mechanical\'</span>
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span> = <span class="string">\'Astro Boy\'</span>;
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">year</span> = <span class="number">1952</span>;
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">save</span>();
 <span class="comment">//Updating a robot name
</span><span class="tag">$<span class="identifier">robot</span></span> = <span class="identifier">Robots</span>::<span class="identifier">findFirst</span>(<span class="string">"id=100"</span>);
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span> = <span class="string">"Biomass"</span>;
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">save</span>();</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'delete' => 
      array (
        'description' => 'Deletes a model instance. Returning true on success or false otherwise.
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">robot</span></span> = <span class="identifier">Robots</span>::<span class="identifier">findFirst</span>(<span class="string">"id=100"</span>);
<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">delete</span>();
<span class="keyword">foreach</span>(<span class="identifier">Robots</span>::<span class="identifier">find</span>(<span class="string">"type = \'mechanical\'"</span>) <span class="keyword operator">as</span> <span class="tag">$<span class="identifier">robot</span></span>){
   <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">delete</span>();
}</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'readAttribute' => 
      array (
        'description' => 'Reads an attribute value by its name
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">readAttribute</span>(<span class="string">\'name\'</span>); ?&gt;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$attribute' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'writeAttribute' => 
      array (
        'description' => 'Writes an attribute value by its name
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">writeAttribute</span>(<span class="string">\'name\'</span>, <span class="string">\'Rosey\'</span>); ?&gt;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$attribute' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'hasOne' => 
      array (
        'description' => 'Setup a 1-1 relation between two models
<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Robots</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Model_Base</span> {
   <span class="keyword">function</span> <span class="identifier">initialize</span>(){
       <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">hasOne</span>(<span class="string">\'id\'</span>, <span class="string">\'RobotsDescription\'</span>, <span class="string">\'robots_id\'</span>);
   }
}</pre>',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$fields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referenceModel' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referencedFields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'belongsTo' => 
      array (
        'description' => 'Setup a relation reverse 1-1  between two models
<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">RobotsParts</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Model_Base</span> {
   <span class="keyword">function</span> <span class="identifier">initialize</span>(){
       <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">belongsTo</span>(<span class="string">\'robots_id\'</span>, <span class="string">\'Robots\'</span>, <span class="string">\'id\'</span>);
   }
}</pre>',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$fields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referenceModel' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referencedFields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'hasMany' => 
      array (
        'description' => 'Setup a relation 1-n between two models
<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Robots</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Model_Base</span> {
   <span class="keyword">function</span> <span class="identifier">initialize</span>(){
       <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">hasMany</span>(<span class="string">\'id\'</span>, <span class="string">\'RobotsParts\'</span>, <span class="string">\'robots_id\'</span>);
   }
}</pre>',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$fields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referenceModel' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referencedFields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '__call' => 
      array (
        'description' => 'Handles methods when a method does not exist',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$method' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$arguments' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
    ),
  ),
  'Phalcon_Model_Exception' => 
  array (
    'description' => 'Exceptions thrown in Phalcon_Model_* classes will use this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Model_Manager' => 
  array (
    'description' => 'Manages the creation of models into applications and their relationships.
 Phacon_Model_Manager helps to control the creation of models across a request execution.

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">manager</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Manager</span>();
<span class="tag">$<span class="identifier">manager</span></span>-&gt;<span class="identifier">setModelsDir</span>(<span class="string">\'../apps/models/\'</span>);
<span class="tag">$<span class="identifier">Robots</span></span> = <span class="keyword operator">new</span> <span class="identifier">Robots</span>(<span class="tag">$<span class="identifier">manager</span></span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Constructor for Phalcon_Model_Manager',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$options' => 
          array (
            'type' => 'Phalcon_Config|stdClass',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setBasePath' => 
      array (
        'description' => 'Sets base path. Depending of your platform, always add a trailing slash or backslash',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$basePath' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setMetaData' => 
      array (
        'description' => 'Overwrites default meta-data manager',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$metadata' => 
          array (
            'type' => 'object',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getMetaData' => 
      array (
        'description' => 'Returns active meta-data manager. If not exist then one will be created',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Model_Metadata',
      ),
      'setCache' => 
      array (
        'description' => 'Set the cache object or cache parameters to make the view caching',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$cache' => 
          array (
            'type' => 'Phalcon_Cache_Backend|object',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getCache' => 
      array (
        'description' => 'Returns default cache backend. This cache will be used to store resultsets and generated SQL',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Cache_Backend',
      ),
      'setModelsDir' => 
      array (
        'description' => 'Sets the models directory. Depending of your platform, always add a trailing slash or backslash',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$modelsDir' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getModelsDir' => 
      array (
        'description' => 'Gets active models directory',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'isModel' => 
      array (
        'description' => 'Checks whether the given name is an existing model
 <pre class="source-code iphp"><span class="comment">//Is there a "Robots" model?
</span> <span class="tag">$<span class="identifier">isModel</span></span> = <span class="tag">$<span class="identifier">manager</span></span>-&gt;<span class="identifier">isModel</span>(<span class="string">\'Robots\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$modelName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'load' => 
      array (
        'description' => 'Loads a model looking for its file and initializing them',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$modelName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'getModel' => 
      array (
        'description' => 'Gets/Instantiates model from directory
 <pre class="source-code iphp"><span class="comment">//Get the "Robots" model
</span> <span class="tag">$<span class="identifier">Robots</span></span> = <span class="tag">$<span class="identifier">manager</span></span>-&gt;<span class="identifier">getModel</span>(<span class="string">\'Robots\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$modelName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'getSource' => 
      array (
        'description' => 'Gets the possible source model name from its class name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$modelName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'getConnection' => 
      array (
        'description' => 'Gets default connection to the database. All models by default will use connection returned by this method',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Db',
      ),
      'addHasOne' => 
      array (
        'description' => 'Setup a 1-1 relation between two models',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$fields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referenceModel' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referencedFields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'addBelongsTo' => 
      array (
        'description' => 'Setup a relation reverse 1-1  between two models',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$fields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referenceModel' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referencedFields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'addHasMany' => 
      array (
        'description' => 'Setup a relation 1-n between two models',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$fields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referenceModel' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$referencedFields' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'existsBelongsTo' => 
      array (
        'description' => 'Checks whether a model has a belongsTo relation with another model',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$modelName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$modelRelation' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'existsHasMany' => 
      array (
        'description' => 'Checks whether a model has a hasMany relation with another model',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$modelName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$modelRelation' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'existsHasOne' => 
      array (
        'description' => 'Checks whether a model has a hasOne relation with another model',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$modelName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$modelRelation' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      '_getRelationRecords' => 
      array (
        'description' => 'Helper method to query records based on a relation definition',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$relation' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$method' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$record' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getBelongsToRecords' => 
      array (
        'description' => 'Gets belongsTo related records from a model',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$method' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$modelName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$modelRelation' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$record' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Model_Resultset',
      ),
      'getHasManyRecords' => 
      array (
        'description' => 'Gets hasMany related records from a model',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$method' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$modelName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$modelRelation' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$record' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Model_Resultset',
      ),
      'getHasOneRecords' => 
      array (
        'description' => 'Gets belongsTo related records from a model',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$method' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$modelName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$modelRelation' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$record' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Model_Resultset',
      ),
      'getBelongsTo' => 
      array (
        'description' => 'Gets belongsTo relations defined on a model',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getHasMany' => 
      array (
        'description' => 'Gets hasMany relations defined on a model',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getHasOne' => 
      array (
        'description' => 'Gets hasOne relations defined on a model',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getHasOneAndHasMany' => 
      array (
        'description' => 'Gets hasOne relations defined on a model',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getCompleteModelsPath' => 
      array (
        'description' => 'Returns the complete on which manager is looking for models',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'autoload' => 
      array (
        'description' => 'Autoload function for model lazy loading',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$className' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getDefault' => 
      array (
        'description' => 'Get the default Phalcon_Model_Manager (usually this first instantiated)',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Model_Manager',
      ),
      'reset' => 
      array (
        'description' => 'Resets internal default manager',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Model_Message' => 
  array (
    'description' => 'Encapsulates validation info generated before save/delete records fails

 <pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Robots</span> <span class="identifier">extens</span> <span class="identifier">Phalcon_Model_Base</span> 
{

   <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">beforeSave</span>()
   {
     <span class="keyword">if</span> (<span class="keyword literal">this</span>-&gt;<span class="identifier">name</span> == <span class="string">\'Peter\'</span>) {
        <span class="tag">$<span class="identifier">text</span></span> = <span class="string">"A robot cannot be named Peter"</span>;
        <span class="tag">$<span class="identifier">field</span></span> = <span class="string">"name"</span>;
        <span class="tag">$<span class="identifier">type</span></span> = <span class="string">"InvalidValue"</span>;
        <span class="tag">$<span class="identifier">message</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Message</span>(<span class="tag">$<span class="identifier">text</span></span>, <span class="tag">$<span class="identifier">field</span></span>, <span class="tag">$<span class="identifier">type</span></span>);
        <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">appendMessage</span>(<span class="tag">$<span class="identifier">message</span></span>);
     }
   }

 }</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Model_Message message',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$field' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$type' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setType' => 
      array (
        'description' => 'Sets message type',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$type' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getType' => 
      array (
        'description' => 'Returns message type',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setMessage' => 
      array (
        'description' => 'Sets verbose message',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getMessage' => 
      array (
        'description' => 'Returns verbose message',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setField' => 
      array (
        'description' => 'Sets field name related to message',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$field' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getField' => 
      array (
        'description' => 'Returns field name related to message',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      '__toString' => 
      array (
        'description' => 'Magic __toString method returns verbose message',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      '__set_state' => 
      array (
        'description' => 'Magic __set_state helps to recover messsages from serialization',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Model_Message',
      ),
    ),
  ),
  'Phalcon_Model_MetaData_Apc' => 
  array (
    'description' => 'Stores model meta-data in the APC cache. Data will erased if the web server is restarted

 By default meta-data is stored 48 hours (172800 seconds)

 You can query the meta-data by printing apc_fetch(\'$PMM$\') or apc_fetch(\'$PMM$my-local-app\')

<pre class="source-code iphp"><span class="tag">$<span class="identifier">modelManager</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Manager</span>();

 <span class="tag">$<span class="identifier">metaData</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Metadata</span>(<span class="string">\'Apc\'</span>, <span class="keyword builtin">array</span>(
    <span class="string">\'suffix\'</span> =&gt; <span class="string">\'my-app-id\'</span>,
    <span class="string">\'lifetime\'</span> =&gt; <span class="number">86400</span>
 ));
 <span class="tag">$<span class="identifier">modelManager</span></span>-&gt;<span class="identifier">setMetaData</span>(<span class="tag">$<span class="identifier">metaData</span></span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Model_MetaData_Apc constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$options' => 
          array (
            'type' => 'Phalcon_Config|stdClass',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'read' => 
      array (
        'description' => 'Reads meta-data from APC',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'write' => 
      array (
        'description' => 'Writes the meta-data to APC',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Model_MetaData_Memory' => 
  array (
    'description' => 'Stores model meta-data in memory. Data will be erased when the request finishes

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">modelManager</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Manager</span>();

 <span class="tag">$<span class="identifier">metaData</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Metadata</span>(<span class="string">\'Memory\'</span>);
 <span class="tag">$<span class="identifier">modelManager</span></span>-&gt;<span class="identifier">setMetaData</span>(<span class="tag">$<span class="identifier">metaData</span></span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'read' => 
      array (
        'description' => 'Reads the meta-data from temporal memory',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'write' => 
      array (
        'description' => 'Writes the meta-data to temporal memory',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Model_MetaData_Session' => 
  array (
    'description' => 'Stores model meta-data in session. Data will erase when the session finishes.
 Meta-data are permanent while the session is active.

 You can query the meta-data by printing $_SESSION[\'$PMM$\']

<pre class="source-code iphp"><span class="tag">$<span class="identifier">modelManager</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Manager</span>();

 <span class="tag">$<span class="identifier">metaData</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Metadata</span>(<span class="string">\'Session\'</span>, <span class="keyword builtin">array</span>(
    <span class="string">\'suffix\'</span> =&gt; <span class="string">\'my-app-id\'</span>
 ));
 <span class="tag">$<span class="identifier">modelManager</span></span>-&gt;<span class="identifier">setMetaData</span>(<span class="tag">$<span class="identifier">metaData</span></span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Model_MetaData_Session constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$options' => 
          array (
            'type' => 'Phalcon_Config|stdClass',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'read' => 
      array (
        'description' => 'Reads meta-data from $_SESSION',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'write' => 
      array (
        'description' => 'Writes the meta-data to $_SESSION',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Model_MetaData' => 
  array (
    'description' => '<p>Because Phalcon_Model requires meta-data like field names, data types, primary keys, etc.
 this component collect them and store for further querying by Phalcon_Model_Base.
 Phalcon_Model_MetaData can also use adapters to store temporarily or permanently the meta-data.</p>

 <p>A standard Phalcon_Model_MetaData can be used to query model attributes:</p>

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">metaData</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_MetaData</span>(<span class="string">\'Memory\'</span>);
<span class="tag">$<span class="identifier">attributes</span></span> = <span class="tag">$<span class="identifier">metaData</span></span>-&gt;<span class="identifier">getAttributes</span>(<span class="keyword operator">new</span> <span class="identifier">Robots</span>());
<span class="identifier">print_r</span>(<span class="tag">$<span class="identifier">attributes</span></span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
      'MODELS_ATTRIBUTES' => 0,
      'MODELS_PRIMARY_KEY' => 1,
      'MODELS_NON_PRIMARY_KEY' => 2,
      'MODELS_NOT_NULL' => 3,
      'MODELS_DATA_TYPE' => 4,
      'MODELS_DATA_TYPE_NUMERIC' => 5,
      'MODELS_DATE_AT' => 6,
      'MODELS_DATE_IN' => 7,
      'MODELS_IDENTITY_FIELD' => 8,
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Model_MetaData constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$adapter' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getAttributes' => 
      array (
        'description' => 'Returns table attributes names (fields)',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getPrimaryKeyAttributes' => 
      array (
        'description' => 'Returns an array of fields which are part of the primary key',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getNonPrimaryKeyAttributes' => 
      array (
        'description' => 'Returns an arrau of fields which are not part of the primary key',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getNotNullAttributes' => 
      array (
        'description' => 'Returns an array of not null attributes',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getDataTypes' => 
      array (
        'description' => 'Returns attributes and their data types',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getDataTypesNumeric' => 
      array (
        'description' => 'Returns attributes which types are numerical',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'getIdentityField' => 
      array (
        'description' => 'Returns the name of identity field (if one is present)',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      'storeMetaData' => 
      array (
        'description' => 'Stores meta-data using to the internal adapter',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'isEmpty' => 
      array (
        'description' => 'Checks if the internal meta-data container is empty',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'reset' => 
      array (
        'description' => 'Resets internal meta-data in order to regenerate it',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Model_Query' => 
  array (
    'description' => 'Phalcon_Model_Query is designed to simplify building of search on models.
 It provides a set of helpers to generate searchs in a dynamic way to support differents databases.

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">query</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Query</span>();
 <span class="tag">$<span class="identifier">query</span></span>-&gt;<span class="identifier">setManager</span>(<span class="tag">$<span class="identifier">manager</span></span>);
 <span class="tag">$<span class="identifier">query</span></span>-&gt;<span class="identifier">from</span>(<span class="string">\'Robots\'</span>);
 <span class="tag">$<span class="identifier">query</span></span>-&gt;<span class="identifier">where</span>(<span class="string">\'id = ?0\'</span>);
 <span class="tag">$<span class="identifier">query</span></span>-&gt;<span class="identifier">where</span>(<span class="string">\'name LIKE ?1\'</span>);
 <span class="tag">$<span class="identifier">query</span></span>-&gt;<span class="identifier">setParameter</span>(<span class="keyword builtin">array</span>(<span class="number">0</span> =&gt; <span class="string">\'10\'</span>, <span class="number">1</span> =&gt; <span class="string">\'%Astro%\'</span>));
 <span class="keyword">foreach</span>(<span class="tag">$<span class="identifier">query</span></span>-&gt;<span class="identifier">getResultset</span>() <span class="keyword operator">as</span> <span class="tag">$<span class="identifier">robot</span></span>){
  <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span>, <span class="string">"\\n"</span>;
 }</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'setManager' => 
      array (
        'description' => 'Set the Phalcon_Model_Manager instance to use in a query
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">controllerFront</span></span> = <span class="identifier">Phalcon_Controller_Front</span>::<span class="identifier">getInstance</span>();
 <span class="tag">$<span class="identifier">modelManager</span></span> = <span class="tag">$<span class="identifier">controllerFront</span></span>-&gt;<span class="identifier">getModelComponent</span>();
 <span class="tag">$<span class="identifier">query</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Query</span>();
 <span class="tag">$<span class="identifier">query</span></span>-&gt;<span class="identifier">setManager</span>(<span class="tag">$<span class="identifier">manager</span></span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$manager' => 
          array (
            'type' => 'Phalcon_Model_Manager',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'from' => 
      array (
        'description' => 'Add models to use in query',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'where' => 
      array (
        'description' => 'Add conditions to use in query',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$condition' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setParameters' => 
      array (
        'description' => 'Set parameter in query to different database adapters.',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$parameter' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setInputData' => 
      array (
        'description' => 'Set the data to use to make the conditions in query',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setLimit' => 
      array (
        'description' => 'Set the limit of rows to show',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$limit' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getResultset' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'getConditions' => 
      array (
        'description' => 'Get the conditions of query',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string $query',
      ),
      'fromInput' => 
      array (
        'description' => 'Get instance of model query',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$modelName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$data' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Model_Query',
      ),
    ),
  ),
  'Phalcon_Model_Resultset' => 
  array (
    'description' => 'This component allows to Phalcon_Model_Base returns large resulsets with the minimum memory consumption
 Resulsets can be traversed using a standard foreach or a while statement. If a resultset is serialized
 it will dump all the rows into a big array. Then unserialize will retrieve the rows as they were before
 serializing.

 <pre class="source-code iphp"><span class="comment">//Using a standard foreach
</span><span class="tag">$<span class="identifier">robots</span></span> = <span class="tag">$<span class="identifier">Robots</span></span>-&gt;<span class="identifier">find</span>(<span class="keyword builtin">array</span>(<span class="string">"type=\'virtual\'"</span>, <span class="string">"order"</span> =&gt; <span class="string">"name"</span>));
<span class="keyword">foreach</span>(<span class="tag">$<span class="identifier">robots</span></span> <span class="keyword operator">as</span> <span class="tag">$<span class="identifier">robot</span></span>){
  <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span>, <span class="string">"\\n"</span>;
}

 <span class="comment">//Using a while
</span><span class="tag">$<span class="identifier">robots</span></span> = <span class="tag">$<span class="identifier">Robots</span></span>-&gt;<span class="identifier">find</span>(<span class="keyword builtin">array</span>(<span class="string">"type=\'virtual\'"</span>, <span class="string">"order"</span> =&gt; <span class="string">"name"</span>));
<span class="tag">$<span class="identifier">robots</span></span>-&gt;<span class="identifier">rewind</span>();
<span class="keyword">while</span>(<span class="tag">$<span class="identifier">robots</span></span>-&gt;<span class="identifier">valid</span>()){
  <span class="tag">$<span class="identifier">robot</span></span> = <span class="tag">$<span class="identifier">robots</span></span>-&gt;<span class="identifier">current</span>();
  <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span>, <span class="string">"\\n"</span>;
  <span class="tag">$<span class="identifier">robots</span></span>-&gt;<span class="identifier">next</span>();
}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
      0 => 'Iterator',
      1 => 'Traversable',
      2 => 'SeekableIterator',
      3 => 'Countable',
      4 => 'ArrayAccess',
      5 => 'Serializable',
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Model_Resultset constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$model' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$result' => 
          array (
            'type' => 'Phalcon_Model_Result',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'valid' => 
      array (
        'description' => 'Check whether internal resource has rows to fetch',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'current' => 
      array (
        'description' => 'Returns current row in the resultset',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Model_Base',
      ),
      'next' => 
      array (
        'description' => 'Moves cursor to next row in the resultset',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'key' => 
      array (
        'description' => 'Gets pointer number of active row in the resultset',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'rewind' => 
      array (
        'description' => 'Rewinds resultset to its beginning',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'seek' => 
      array (
        'description' => 'Changes internal pointer to a specific position in the resultset',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$position' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'count' => 
      array (
        'description' => 'Counts how many rows are in the resultset',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'int',
      ),
      'offsetExists' => 
      array (
        'description' => 'Checks whether offset exists in the resultset',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$index' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'offsetGet' => 
      array (
        'description' => 'Gets row in a specific position of the resultset',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$index' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Model_Base',
      ),
      'offsetSet' => 
      array (
        'description' => 'Resulsets cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$index' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'offsetUnset' => 
      array (
        'description' => 'Resulsets cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$offset' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getFirst' => 
      array (
        'description' => 'Get first row in the resultset',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Model_Base',
      ),
      'getLast' => 
      array (
        'description' => 'Get last row in the resultset',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Model_Base',
      ),
      'isFresh' => 
      array (
        'description' => 'Tell if the resultset if fresh or an old cached',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'serialize' => 
      array (
        'description' => 'Serializing a resultset will dump all related rows into a big array',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'unserialize' => 
      array (
        'description' => 'Unserializing a resultset will allow to only works on the rows present in the saved state',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Model_Row' => 
  array (
    'description' => 'This component allows to Phalcon_Model_Base returns grouped resultsets.',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'setConnection' => 
      array (
        'description' => 'Overwrites default connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$connection' => 
          array (
            'type' => 'Phalcon_Db',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getConnection' => 
      array (
        'description' => 'Returns default connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Db',
      ),
      'dumpResult' => 
      array (
        'description' => 'Assigns values to a row from an array returning a new row
<pre class="source-code iphp"><span class="tag">$<span class="identifier">row</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Model_Row</span>();
<span class="tag">$<span class="identifier">newRow</span></span> = <span class="tag">$<span class="identifier">row</span></span>-&gt;<span class="identifier">dumpResult</span>(<span class="keyword builtin">array</span>(
  <span class="string">\'type\'</span> =&gt; <span class="string">\'mechanical\'</span>,
  <span class="string">\'name\'</span> =&gt; <span class="string">\'Astro Boy\'</span>,
  <span class="string">\'year\'</span> =&gt; <span class="number">1952</span>
));</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$result' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Model $result',
      ),
      'readAttribute' => 
      array (
        'description' => 'Reads an attribute value by its name
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">readAttribute</span>(<span class="string">\'name\'</span>); ?&gt;</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$property' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'sleep' => 
      array (
        'description' => 'Magic method sleep',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
    ),
  ),
  'Phalcon_Model_Sanitize' => 
  array (
    'description' => '',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Model_Validator_Email' => 
  array (
    'description' => 'Allows to validate if email fields has correct values

<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Subscriptors</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Model_Base</span> 
{

  <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">validation</span>()
  {
      <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validate</span>(<span class="string">\'Email\'</span>, <span class="keyword builtin">array</span>(
          <span class="string">\'field\'</span> =&gt; <span class="string">\'electronic_mail\'</span>
      ));
      <span class="keyword">if</span> (<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validationHasFailed</span>() == <span class="keyword literal">true</span>){
          <span class="keyword">return</span> <span class="keyword literal">false</span>;
      }
  }

}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'validate' => 
      array (
        'description' => 'Executes the validator',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
    ),
  ),
  'Phalcon_Model_Validator_Exclusionin' => 
  array (
    'description' => 'ExclusionInValidator

 Check if a value is not included into a list of values

<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Subscriptors</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Model_Base</span> 
{

  <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">validation</span>()
  {
      <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validate</span>(<span class="string">\'ExclusionIn\'</span>, <span class="keyword builtin">array</span>(
          <span class="string">\'field\'</span> =&gt; <span class="string">\'status\'</span>,
          <span class="string">\'domain\'</span> =&gt; <span class="keyword builtin">array</span>(<span class="string">\'A\'</span>, <span class="string">\'I\'</span>)
      ));
      <span class="keyword">if</span> (<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validationHasFailed</span>() == <span class="keyword literal">true</span>){
          <span class="keyword">return</span> <span class="keyword literal">false</span>;
      }
  }

}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'checkOptions' => 
      array (
        'description' => 'Check that the options are valid',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'validate' => 
      array (
        'description' => 'Executes validator',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
    ),
  ),
  'Phalcon_Model_Validator_Inclusionin' => 
  array (
    'description' => 'Check if a value is included into a list of values

<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Subscriptors</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Model_Base</span> 
{

  <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">validation</span>()
  {
      <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validate</span>(<span class="string">\'InclusionIn\'</span>, <span class="keyword builtin">array</span>(
          <span class="string">\'field\'</span> =&gt; <span class="string">\'status\'</span>,
          <span class="string">\'domain\'</span> =&gt; <span class="keyword builtin">array</span>(<span class="string">\'P\'</span>, <span class="string">\'I\'</span>)
      ));
      <span class="keyword">if</span> (<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validationHasFailed</span>()==<span class="keyword literal">true</span>) {
          <span class="keyword">return</span> <span class="keyword literal">false</span>;
      }
  }

}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'checkOptions' => 
      array (
        'description' => 'Check that the options are valid',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'validate' => 
      array (
        'description' => 'Executes validator',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
    ),
  ),
  'Phalcon_Model_Validator_Numericality' => 
  array (
    'description' => 'Allows to validate if a field has a valid numeric format

<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Posts</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Model_Base</span> 
{

  <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">validation</span>()
  {
      <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validate</span>(<span class="string">\'Numericality\'</span>, <span class="keyword builtin">array</span>(
          <span class="string">\'field\'</span> =&gt; <span class="string">\'year\'</span>
      ));
      <span class="keyword">if</span> (<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validationHasFailed</span>() == <span class="keyword literal">true</span>){
          <span class="keyword">return</span> <span class="keyword literal">false</span>;
      }
  }

}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'validate' => 
      array (
        'description' => 'Executes the validator',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
    ),
  ),
  'Phalcon_Model_Validator_Regex' => 
  array (
    'description' => 'Allows to validate if the value of a field matches a regular expression

<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Subscriptors</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Model_Base</span> 
{

  <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">validation</span>()
  {
      <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validate</span>(<span class="string">\'Regex\'</span>, <span class="keyword builtin">array</span>(
          <span class="string">\'field\'</span> =&gt; <span class="string">\'created_at\'</span>,
          <span class="string">\'pattern\'</span> =&gt; <span class="string">\'/^[0-9]{4}[-\\/](0[1-9]|1[12])[-\\/](0[1-9]|[12][0-9]|3[01])$/\'</span>
      ));
      <span class="keyword">if</span> (<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validationHasFailed</span>() == <span class="keyword literal">true</span>){
          <span class="keyword">return</span> <span class="keyword literal">false</span>;
      }
  }

}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'checkOptions' => 
      array (
        'description' => 'Check that the options are correct',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'validate' => 
      array (
        'description' => 'Executes the validator',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
    ),
  ),
  'Phalcon_Model_Validator_Uniqueness' => 
  array (
    'description' => 'Validates that a field or a combination of a set of fields are not
 present more than once in the existing records of the related table

<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">Subscriptors</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Model_Base</span>
{

  <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">validation</span>()
  {
      <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validate</span>(<span class="string">\'Uniqueness\'</span>, <span class="keyword builtin">array</span>(
          <span class="string">\'field\'</span> =&gt; <span class="string">\'email\'</span>
      ));
      <span class="keyword">if</span> (<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">validationHasFailed</span>() == <span class="keyword literal">true</span>) {
          <span class="keyword">return</span> <span class="keyword literal">false</span>;
      }
  }

}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'validate' => 
      array (
        'description' => 'Executes the validator',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
    ),
  ),
  'Phalcon_Model_Validator' => 
  array (
    'description' => 'This is the base class for all the Phalcon_Model buit-in validators',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'abstract',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Model_Validator constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$record' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$fieldName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'appendMessage' => 
      array (
        'description' => 'Appends a message to the validator',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$field' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$type' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getMessages' => 
      array (
        'description' => 'Returns messages generated by the validator',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'isRequired' => 
      array (
        'description' => 'Check whether option "required" has been passed as option',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getOptions' => 
      array (
        'description' => 'Returns all the options from the validator',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getOption' => 
      array (
        'description' => 'Returns an option',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$option' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'isSetOption' => 
      array (
        'description' => 'Check whether a option has been defined in the validator options',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$option' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'getValue' => 
      array (
        'description' => 'Returns the value of the validated field',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'mixed',
      ),
      'getFieldName' => 
      array (
        'description' => 'Devuelve el nombre del campo validado',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getRecord' => 
      array (
        'description' => 'Returns Phalcon_Model_Base related record',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Model_Base',
      ),
      'checkOptions' => 
      array (
        'description' => 'This method can be overridden to implement specific option validations for the validator',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Paginator_Adapter_Array' => 
  array (
    'description' => 'Array_Paginator

 Component of pagination by array data',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Paginator_Adapter_Array constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$config' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setCurrentPage' => 
      array (
        'description' => 'Set the current page number',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$page' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getPaginate' => 
      array (
        'description' => 'Returns a slice of the resultset to show in the pagination',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'stdClass',
      ),
    ),
  ),
  'Phalcon_Paginator_Adapter_Model' => 
  array (
    'description' => 'This adapter allows to paginate data using Phalcon_Model resultsets.',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Paginator_Adapter_Model constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$config' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setCurrentPage' => 
      array (
        'description' => 'Set the current page number',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$page' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getPaginate' => 
      array (
        'description' => 'Returns a slice of the resultset to show in the pagination',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'stdClass',
      ),
    ),
  ),
  'Phalcon_Paginator_Exception' => 
  array (
    'description' => 'Exceptions thrown in Phalcon_Paginator will use this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Paginator' => 
  array (
    'description' => 'Phalcon_Paginator is designed to simplify building of pagination on views

 <pre class="source-code iphp"><span class="comment">//Use an alias for Phalcon_Tag
</span> <span class="keyword">use</span> <span class="identifier">Tag</span> <span class="keyword operator">as</span> <span class="identifier">Phalcon_Tag</span>;

 <span class="comment">//Gets the active page number
</span> <span class="tag">$<span class="identifier">numberPage</span></span> = (<span class="keyword type">int</span>) <span class="tag">$<span class="identifier">_GET</span></span>[<span class="string">\'page\'</span>];

 <span class="comment">//Create a Model paginator
</span> <span class="tag">$<span class="identifier">paginator</span></span> = <span class="identifier">Phalcon_Paginator</span>::<span class="identifier">factory</span>(<span class="string">\'Model\'</span>, <span class="keyword builtin">array</span>(
   <span class="string">\'data\'</span> =&gt; <span class="tag">$<span class="identifier">robots</span></span>,
   <span class="string">\'limit\'</span> =&gt; <span class="number">10</span>,
   <span class="string">\'page\'</span> =&gt; <span class="tag">$<span class="identifier">numberPage</span></span>
 ));

 <span class="comment">//Get the active page
</span> <span class="tag">$<span class="identifier">page</span></span> = <span class="tag">$<span class="identifier">paginator</span></span>-&gt;<span class="identifier">getPaginate</span>();

?&gt;

&lt;<span class="identifier">table</span>&gt;
 &lt;<span class="identifier">tr</span>&gt;
   &lt;<span class="identifier">th</span>&gt;<span class="identifier">Id</span>&lt;/<span class="identifier">th</span>&gt;
   &lt;<span class="identifier">th</span>&gt;<span class="identifier">Name</span>&lt;/<span class="identifier">th</span>&gt;
   &lt;<span class="identifier">th</span>&gt;<span class="identifier">Type</span>&lt;/<span class="identifier">th</span>&gt;
 &lt;/<span class="identifier">tr</span>&gt;
  <span class="keyword">foreach</span>(<span class="tag">$<span class="identifier">page</span></span>-&gt;<span class="identifier">items</span> <span class="keyword operator">as</span> <span class="tag">$<span class="identifier">item</span></span>){ ?&gt;
  &lt;<span class="identifier">tr</span>&gt;
   &lt;<span class="identifier">td</span>&gt; <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">item</span></span>-&gt;<span class="identifier">id</span> ?&gt;&lt;/<span class="identifier">td</span>&gt;
   &lt;<span class="identifier">td</span>&gt; <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">item</span></span>-&gt;<span class="identifier">name</span> ?&gt;&lt;/<span class="identifier">td</span>&gt;
   &lt;<span class="identifier">td</span>&gt; <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">item</span></span>-&gt;<span class="identifier">type</span> ?&gt;&lt;/<span class="identifier">td</span>&gt;
  &lt;/<span class="identifier">tr</span>&gt;
  } ?&gt;
&lt;/<span class="identifier">table</span>&gt;

&lt;<span class="identifier">table</span>&gt;
  &lt;<span class="identifier">tr</span>&gt;
    &lt;<span class="identifier">td</span>&gt;&lt;?= <span class="identifier">Tag</span>::<span class="identifier">linkTo</span>(<span class="string">"robots/search"</span>, <span class="string">"First"</span>) ?&gt;&lt;/<span class="identifier">td</span>&gt;
    &lt;<span class="identifier">td</span>&gt;&lt;?= <span class="identifier">Tag</span>::<span class="identifier">linkTo</span>(<span class="string">"robots/search?page="</span>.<span class="tag">$<span class="identifier">page</span></span>-&gt;<span class="identifier">before</span>, <span class="string">"Previous"</span>) ?&gt;&lt;/<span class="identifier">td</span>&gt;
    &lt;<span class="identifier">td</span>&gt;&lt;?= <span class="identifier">Tag</span>::<span class="identifier">linkTo</span>(<span class="string">"robots/search?page="</span>.<span class="tag">$<span class="identifier">page</span></span>-&gt;<span class="identifier">next</span>, <span class="string">"Next"</span>) ?&gt;&lt;/<span class="identifier">td</span>&gt;
    &lt;<span class="identifier">td</span>&gt;&lt;?= <span class="identifier">Tag</span>::<span class="identifier">linkTo</span>(<span class="string">"robots/search?page="</span>.<span class="tag">$<span class="identifier">page</span></span>-&gt;<span class="identifier">last</span>, <span class="string">"Last"</span>) ?&gt;&lt;/<span class="identifier">td</span>&gt;
    &lt;<span class="identifier">td</span>&gt; <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">page</span></span>-&gt;<span class="identifier">current</span>, <span class="string">"/"</span>, <span class="tag">$<span class="identifier">page</span></span>-&gt;<span class="identifier">total_pages</span> ?&gt;&lt;/<span class="identifier">td</span>&gt;
  &lt;/<span class="identifier">tr</span>&gt;
 &lt;/<span class="identifier">table</span>&gt;</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'abstract',
    'methods' => 
    array (
      'factory' => 
      array (
        'description' => 'Factories a paginator adapter',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$adapterName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'Object',
      ),
    ),
  ),
  'Phalcon_Request_Exception' => 
  array (
    'description' => 'Exceptions thrown in Phalcon_Request will use this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Request_File' => 
  array (
    'description' => 'Provides OO wrappers to the $_FILES superglobal

<pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">PostsController</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Controller</span>
{

 <span class="keyword">public</span> <span class="keyword">function</span> <span class="identifier">uploadAction</span>()
 {
   <span class="comment">//Check if the user has uploaded files
</span>   <span class="keyword">if</span> (<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">request</span>-&gt;<span class="identifier">hasFiles</span>() == <span class="keyword literal">true</span>) {
      <span class="comment">//Print the real file names and sizes
</span>      <span class="keyword">foreach</span> (<span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">request</span>-&gt;<span class="identifier">getUploadedFiles</span>() <span class="keyword operator">as</span> <span class="tag">$<span class="identifier">file</span></span>){
         <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">file</span></span>-&gt;<span class="identifier">getName</span>(), <span class="string">" "</span>, <span class="tag">$<span class="identifier">file</span></span>-&gt;<span class="identifier">getSize</span>(), <span class="string">"\\n"</span>;
      }
   }
 }

}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Request_File constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$file' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getSize' => 
      array (
        'description' => 'Returns the file size of the uploaded file',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'int',
      ),
      'getName' => 
      array (
        'description' => 'Returns the real name of the uploaded file',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getTempName' => 
      array (
        'description' => 'Returns the temporal name of the uploaded file',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Request' => 
  array (
    'description' => '<p>Encapsulates request information for easy and secure access from application controllers.</p>

 <p>The request object is a simple value object that is passed between the dispatcher and controller classes.
 It packages the HTTP request environment.</p>

 <pre class="source-code iphp"><span class="tag">$<span class="identifier">request</span></span> = <span class="identifier">Phalcon_Request</span>::<span class="identifier">getInstance</span>();
<span class="keyword">if</span> (<span class="tag">$<span class="identifier">request</span></span>-&gt;<span class="identifier">isPost</span>() == <span class="keyword literal">true</span>) {
 <span class="keyword">if</span> (<span class="tag">$<span class="identifier">request</span></span>-&gt;<span class="identifier">isAjax</span>() == <span class="keyword literal">true</span>) {
   <span class="keyword builtin">echo</span> <span class="string">\'Request was made using POST and AJAX\'</span>;
 }
}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'getInstance' => 
      array (
        'description' => 'Gets the singleton instance of Phalcon_Request',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Request',
      ),
      'setFilter' => 
      array (
        'description' => 'Overwrites Phalcon_Filter object used to sanitize input data
<pre class="source-code iphp"><span class="tag">$<span class="identifier">request</span></span>-&gt;<span class="identifier">setFilter</span>(<span class="tag">$<span class="identifier">myFilter</span></span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$filter' => 
          array (
            'type' => 'Phalcon_Filter',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getFilter' => 
      array (
        'description' => 'Returns the active filter object used to sanitize input data
<pre class="source-code iphp"><span class="comment">// returns "100019.01"
</span> <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">request</span></span>-&gt;<span class="identifier">getFilter</span>()-&gt;<span class="identifier">sanitize</span>(<span class="string">"!100a019.01a"</span>, <span class="string">"float"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Filter',
      ),
      'getPost' => 
      array (
        'description' => 'Gets variable from $_POST superglobal applying filters if needed
<pre class="source-code iphp"><span class="comment">//Returns value from $_POST["user_email"] without sanitizing
</span> <span class="tag">$<span class="identifier">userEmail</span></span> = <span class="tag">$<span class="identifier">request</span></span>-&gt;<span class="identifier">getPost</span>(<span class="string">"user_email"</span>);
 <span class="comment">//Returns value from $_POST["user_email"] with sanitizing
</span> <span class="tag">$<span class="identifier">userEmail</span></span> = <span class="tag">$<span class="identifier">request</span></span>-&gt;<span class="identifier">getPost</span>(<span class="string">"user_email"</span>, <span class="string">"email"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$filters' => 
          array (
            'type' => 'string|array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'getQuery' => 
      array (
        'description' => 'Gets variable from $_GET superglobal applying filters if needed
<pre class="source-code iphp"><span class="comment">//Returns value from $_GET["id"] without sanitizing
</span> <span class="tag">$<span class="identifier">id</span></span> = <span class="tag">$<span class="identifier">request</span></span>-&gt;<span class="identifier">getQuery</span>(<span class="string">"id"</span>);
 <span class="comment">//Returns value from $_GET["id"] with sanitizing
</span> <span class="tag">$<span class="identifier">id</span></span> = <span class="tag">$<span class="identifier">request</span></span>-&gt;<span class="identifier">getQuery</span>(<span class="string">"id"</span>, <span class="string">"int"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$filters' => 
          array (
            'type' => 'string|array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'getServer' => 
      array (
        'description' => 'Gets variable from $_SERVER superglobal',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'hasPost' => 
      array (
        'description' => 'Checks whether $_POST superglobal has certain index',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'hasQuery' => 
      array (
        'description' => 'Checks whether $_SERVER superglobal has certain index',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'hasServer' => 
      array (
        'description' => 'Checks whether $_SERVER superglobal has certain index',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'getHeader' => 
      array (
        'description' => 'Gets HTTP header from request data',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$header' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'getScheme' => 
      array (
        'description' => 'Gets HTTP schema (http/https)',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'isAjax' => 
      array (
        'description' => 'Checks whether request has been made using ajax',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'isSoapRequested' => 
      array (
        'description' => 'Checks whether request has been made using SOAP',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'isSecureRequest' => 
      array (
        'description' => 'Checks whether request has been made using any secure layer',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getRawBody' => 
      array (
        'description' => 'Gets HTTP raws request body',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getServerAddress' => 
      array (
        'description' => 'Gets active server address IP',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getServerName' => 
      array (
        'description' => 'Gets active server name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getHttpHost' => 
      array (
        'description' => 'Gets information about schema, host and port used by the request',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getClientAddress' => 
      array (
        'description' => 'Gets most possibly client IPv4 Address. This methods search in $_SERVER[\'HTTP_X_FORWARDED_FOR\'] and $_SERVER[\'REMOTE_ADDR\']',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getMethod' => 
      array (
        'description' => 'Gets HTTP method which request has been made',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getUserAgent' => 
      array (
        'description' => 'Gets HTTP user agent used to made the request',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'isPost' => 
      array (
        'description' => 'Checks whether HTTP method is POST. if $_SERVER[\'REQUEST_METHOD\']==\'POST\'',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'isGet' => 
      array (
        'description' => 'Checks whether HTTP method is GET. if $_SERVER[\'REQUEST_METHOD\']==\'GET\'',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'isPut' => 
      array (
        'description' => 'Checks whether HTTP method is PUT. if $_SERVER[\'REQUEST_METHOD\']==\'PUT\'',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'isHead' => 
      array (
        'description' => 'Checks whether HTTP method is HEAD. if $_SERVER[\'REQUEST_METHOD\']==\'HEAD\'',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'isDelete' => 
      array (
        'description' => 'Checks whether HTTP method is DELETE. if $_SERVER[\'REQUEST_METHOD\']==\'DELETE\'',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'isOptions' => 
      array (
        'description' => 'Checks whether HTTP method is OPTIONS. if $_SERVER[\'REQUEST_METHOD\']==\'OPTIONS\'',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'hasFiles' => 
      array (
        'description' => 'Checks whether request include attached files',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getUploadedFiles' => 
      array (
        'description' => 'Gets attached files as Phalcon_Request_File instances',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Request_File[]',
      ),
      'getHTTPReferer' => 
      array (
        'description' => 'Gets web page that refers active request. ie: http://www.google.com',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      '_getQualityHeader' => 
      array (
        'description' => 'Process a request header and return an array of values with their qualities',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$serverIndex' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'array',
      ),
      '_getBestQuality' => 
      array (
        'description' => 'Process a request header and return the one with best quality',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$qualityParts' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'getAcceptableContent' => 
      array (
        'description' => 'Gets array with mime/types and their quality accepted by the browser/client from $_SERVER[\'HTTP_ACCEPT\']',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getBestAccept' => 
      array (
        'description' => 'Gets best mime/type accepted by the browser/client from $_SERVER[\'HTTP_ACCEPT\']',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getClientCharsets' => 
      array (
        'description' => 'Gets charsets array and their quality accepted by the browser/client from $_SERVER[\'HTTP_ACCEPT_CHARSET\']',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getBestCharset' => 
      array (
        'description' => 'Gets best charset accepted by the browser/client from $_SERVER[\'HTTP_ACCEPT_CHARSET\']',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getLanguages' => 
      array (
        'description' => 'Gets languages array and their quality accepted by the browser/client from $_SERVER[\'HTTP_ACCEPT_LANGUAGE\']',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getBestLanguage' => 
      array (
        'description' => 'Gets best language accepted by the browser/client from $_SERVER[\'HTTP_ACCEPT_LANGUAGE\']',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'reset' => 
      array (
        'description' => 'Resets the internal singleton',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Response_Exception' => 
  array (
    'description' => 'Exceptions thrown in Phalcon_Response will use this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Response_Headers' => 
  array (
    'description' => '',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'set' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'get' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setRaw' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$header' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'send' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Response' => 
  array (
    'description' => 'Encapsulates the HTTP response message.

<pre class="source-code iphp"><span class="tag">$<span class="identifier">response</span></span> = <span class="identifier">Phalcon_Response</span>::<span class="identifier">getInstance</span>();
<span class="tag">$<span class="identifier">response</span></span>-&gt;<span class="identifier">setStatusCode</span>(<span class="number">200</span>, <span class="string">"OK"</span>);
<span class="tag">$<span class="identifier">response</span></span>-&gt;<span class="identifier">setContent</span>(<span class="string">"&lt;html&gt;&lt;body&gt;Hello&lt;/body&gt;&lt;/html&gt;"</span>);
<span class="tag">$<span class="identifier">response</span></span>-&gt;<span class="identifier">send</span>();</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'getInstance' => 
      array (
        'description' => 'Returns singleton Phalcon_Response instance',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Response',
      ),
      'setStatusCode' => 
      array (
        'description' => 'Sets the HTTP response code',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$code' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$message' => 
          array (
            'type' => 'strign',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Response',
      ),
      'getHeaders' => 
      array (
        'description' => 'Returns headers set by the user',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Response_Headers',
      ),
      'setHeader' => 
      array (
        'description' => 'Overwrites a header in the response
<pre class="source-code iphp"><span class="tag">$<span class="identifier">response</span></span>-&gt;<span class="identifier">setHeader</span>(<span class="string">"Content-Type"</span>, <span class="string">"text/plain"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Response',
      ),
      'setRawHeader' => 
      array (
        'description' => 'Send a raw header to the response
<pre class="source-code iphp"><span class="tag">$<span class="identifier">response</span></span>-&gt;<span class="identifier">setRawHeader</span>(<span class="string">"HTTP/1.1 404 Not Found"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$header' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Response',
      ),
      'setExpires' => 
      array (
        'description' => 'Sets output expire time header',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$datetime' => 
          array (
            'type' => 'DateTime',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Response',
      ),
      'setNotModified' => 
      array (
        'description' => 'Sends a Not-Modified response',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'setContentType' => 
      array (
        'description' => 'Sets the response content-type mime, optionally the charset
<pre class="source-code iphp"><span class="tag">$<span class="identifier">response</span></span>-&gt;<span class="identifier">setContentType</span>(<span class="string">\'text/plain\'</span>, <span class="string">\'UTF-8\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$contentType' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$charset' => 
          array (
            'type' => 'unknown',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'redirect' => 
      array (
        'description' => 'Redirect by HTTP to another action or URL
<pre class="source-code iphp"><span class="tag">$<span class="identifier">response</span></span>-&gt;<span class="identifier">redirect</span>(<span class="string">"posts/index"</span>);
<span class="tag">$<span class="identifier">response</span></span>-&gt;<span class="identifier">redirect</span>(<span class="string">"http://en.wikipedia.org"</span>, <span class="keyword literal">true</span>);
<span class="tag">$<span class="identifier">response</span></span>-&gt;<span class="identifier">redirect</span>(<span class="string">"http://www.example.com/new-location"</span>, <span class="keyword literal">true</span>, <span class="number">301</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$location' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$externalRedirect' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
          '$statusCode' => 
          array (
            'type' => 'int',
            'optional' => true,
            'default' => 302,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Response',
      ),
      'setContent' => 
      array (
        'description' => 'Sets HTTP response body
<pre class="source-code iphp"><span class="tag">$<span class="identifier">response</span></span>-&gt;<span class="identifier">setContent</span>(<span class="string">"&lt;h1&gt;Hello!&lt;/h1&gt;"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$content' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'appendContent' => 
      array (
        'description' => 'Appends a string to the HTTP response body',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$content' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Response',
      ),
      'getContent' => 
      array (
        'description' => 'Gets HTTP response body',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'send' => 
      array (
        'description' => 'Prints out HTTP response to the client',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Response',
      ),
      'reset' => 
      array (
        'description' => 'Resets the internal singleton',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Router_Regex' => 
  array (
    'description' => '<p>Phalcon_Router_Regex is the standard framework router. Routing is the
 process of taking a URI endpoint (that part of the URI which comes after the base URL) and
 decomposing it into parameters to determine which module, controller, and
 action of that controller should receive the request</p>

<pre class="source-code iphp"><span class="tag">$<span class="identifier">router</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Router_Rewrite</span>();
<span class="tag">$<span class="identifier">router</span></span>-&gt;<span class="identifier">handle</span>();
<span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">router</span></span>-&gt;<span class="identifier">getControllerName</span>();</pre>

 Settings baseUri first:

<pre class="source-code iphp"><span class="tag">$<span class="identifier">router</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Router_Regex</span>();
<span class="tag">$<span class="identifier">router</span></span>-&gt;<span class="identifier">handle</span>();
<span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">router</span></span>-&gt;<span class="identifier">getControllerName</span>();</pre>
</example>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      '_getRewriteUri' => 
      array (
        'description' => 'Get rewrite info',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'setBaseUri' => 
      array (
        'description' => 'Set the base of application',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$baseUri' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'compilePattern' => 
      array (
        'description' => 'Replaces placeholders from pattern returning a valid PCRE regular expression',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$pattern' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'add' => 
      array (
        'description' => 'Add a route to the router',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$pattern' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$paths' => 
          array (
            'type' => 'string/array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'handle' => 
      array (
        'description' => 'Handles routing information received from the rewrite engine',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$uri' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getControllerName' => 
      array (
        'description' => 'Returns proccesed controller name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getActionName' => 
      array (
        'description' => 'Returns proccesed action name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getParams' => 
      array (
        'description' => 'Returns proccesed extra params',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getCurrentRoute' => 
      array (
        'description' => 'Returns the route that matchs the handled URI',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Router_Rewrite' => 
  array (
    'description' => '<p>Phalcon_Router_Rewrite is the standard framework router. Routing is the
 process of taking a URI endpoint (that part of the URI which comes after the base URL) and
 decomposing it into parameters to determine which module, controller, and
 action of that controller should receive the request</p>

<example>
Rewrite rules using a single document root:
<pre class="source-code iphp"><span class="identifier">RewriteEngine</span> <span class="identifier">On</span>
<span class="identifier">RewriteCond</span> %{<span class="identifier">REQUEST_FILENAME</span>} -<span class="identifier">s</span> [<span class="identifier">OR</span>]
<span class="identifier">RewriteCond</span> %{<span class="identifier">REQUEST_FILENAME</span>} -<span class="identifier">l</span> [<span class="identifier">OR</span>]
<span class="identifier">RewriteCond</span> %{<span class="identifier">REQUEST_FILENAME</span>} -<span class="identifier">d</span>
<span class="identifier">RewriteRule</span> ^.*<span class="tag">$</span> - [<span class="identifier">NC</span>,<span class="identifier">L</span>]
<span class="identifier">RewriteRule</span> ^.*<span class="tag">$</span> <span class="identifier">index</span>.<span class="identifier">php</span> [<span class="identifier">NC</span>,<span class="identifier">L</span>]</pre>

Rewrite rules using a hidden directory and a public/ document root:
<pre class="source-code iphp"><span class="identifier">RewriteEngine</span> <span class="identifier">on</span>
<span class="identifier">RewriteRule</span>  ^<span class="tag">$</span> <span class="keyword">public</span>/    [<span class="identifier">L</span>]
<span class="identifier">RewriteRule</span>  (.*) <span class="keyword">public</span>/<span class="tag">$</span><span class="number">1</span> [<span class="identifier">L</span>]</pre>

 On public/.htaccess:

<pre class="source-code iphp"><span class="identifier">RewriteEngine</span> <span class="identifier">On</span>
<span class="identifier">RewriteCond</span> %{<span class="identifier">REQUEST_FILENAME</span>} !-<span class="identifier">d</span>
<span class="identifier">RewriteCond</span> %{<span class="identifier">REQUEST_FILENAME</span>} !-<span class="identifier">f</span>
<span class="identifier">RewriteRule</span> ^(.*)<span class="tag">$</span> <span class="identifier">index</span>.<span class="identifier">php</span>?<span class="identifier">_url</span>=<span class="tag">$</span><span class="number">1</span> [<span class="identifier">QSA</span>,<span class="identifier">L</span>]</pre>

 The component can be used as follows:

<pre class="source-code iphp"><span class="tag">$<span class="identifier">router</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_Router_Rewrite</span>(); 
<span class="tag">$<span class="identifier">router</span></span>-&gt;<span class="identifier">handle</span>();
<span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">router</span></span>-&gt;<span class="identifier">getControllerName</span>();</pre>
</example>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '_getRewriteUri' => 
      array (
        'description' => 'Get rewrite info',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'setPrefix' => 
      array (
        'description' => 'Set a uri prefix. This will be replaced from the beginning of the uri',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$prefix' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'handle' => 
      array (
        'description' => 'Handles routing information received from the rewrite engine',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$uri' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getControllerName' => 
      array (
        'description' => 'Returns proccesed controller name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getActionName' => 
      array (
        'description' => 'Returns proccesed action name',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getParams' => 
      array (
        'description' => 'Returns proccesed extra params',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
    ),
  ),
  'Phalcon_Session_Namespace' => 
  array (
    'description' => 'This component helps to separate session data into namespaces. Working by this way
 you can easily create groups of session variables into the application',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Constructo of class',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '__set' => 
      array (
        'description' => 'Setter of values',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$property' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '__get' => 
      array (
        'description' => 'Getter of values',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$property' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Session' => 
  array (
    'description' => 'Session client-server persistent state data management. This component
 allow you to separate your session data between application or modules.
 With this, it\'s possible to use the same index to refer a variable
 but they can be in different applications.

 <pre class="source-code iphp"><span class="identifier">Phalcon_Session</span>::<span class="identifier">start</span>(<span class="keyword builtin">array</span>(
    <span class="string">\'uniqueId\'</span> =&gt; <span class="string">\'my-private-app\'</span>
 ));

 <span class="identifier">Phalcon_Session</span>::<span class="identifier">set</span>(<span class="string">\'var\'</span>, <span class="string">\'some-value\'</span>);

 <span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Session</span>::<span class="identifier">set</span>(<span class="string">\'var\'</span>);</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'abstract',
    'methods' => 
    array (
      'start' => 
      array (
        'description' => 'Starts session, optionally using an adapter',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$options' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setOptions' => 
      array (
        'description' => 'Sets session options',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$options' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'get' => 
      array (
        'description' => 'Gets a session variable from an application context',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$index' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'set' => 
      array (
        'description' => 'Sets a session variable in an application context',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$index' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'has' => 
      array (
        'description' => 'Check whether a session variable is set in an application context',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$index' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'remove' => 
      array (
        'description' => 'Removes a session variable from an application context',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$index' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getId' => 
      array (
        'description' => 'Returns active session id',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Tag_Exception' => 
  array (
    'description' => 'Exceptions thrown in Phalcon_Tag will use this class',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Tag_Select' => 
  array (
    'description' => '',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'abstract',
    'methods' => 
    array (
      'select' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$data' => 
          array (
            'type' => 'unknown',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_optionsFromResultset' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'protected',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$resultset' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$using' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$closeOption' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_optionsFromArray' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'protected',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$data' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$closeOption' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Tag' => 
  array (
    'description' => 'Phalcon_Tag is designed to simplify building of HTML tags.
 It provides a set of helpers to generate HTML in a dynamic way.
 This component is an abstract class that you can extend to add more helpers.',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'abstract',
    'methods' => 
    array (
      'setDispatcher' => 
      array (
        'description' => 'Sets the request dispatcher. A valid dispatcher is required to generate absolute paths',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$dispatcher' => 
          array (
            'type' => 'Phalcon_Dispatcher',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_getDispatcher' => 
      array (
        'description' => 'Internally gets the request dispatcher',
        'modifiers' => 
        array (
          0 => 'protected',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Dispatcher',
      ),
      'setDefault' => 
      array (
        'description' => 'Assigns default values to generated tags by helpers
 <pre class="source-code iphp"><span class="comment">//Assigning "peter" to "name" component
</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">setDefault</span>(<span class="string">"name"</span>, <span class="string">"peter"</span>);
 <span class="comment">//Later in the view
</span> <span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">textField</span>(<span class="string">"name"</span>); //<span class="identifier">Will</span> <span class="identifier">have</span> <span class="identifier">the</span> <span class="identifier">value</span> <span class="string">"peter"</span> <span class="identifier">by</span> <span class="keyword">default</span></pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$id' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'displayTo' => 
      array (
        'description' => 'Alias of Phalcon_Tag::setDefault',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$id' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getValue' => 
      array (
        'description' => 'Every helper calls this function to check whether a component has a predefined
 value using Phalcon_Tag::displayTo or value from $_POST',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$name' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'mixed',
      ),
      'resetInput' => 
      array (
        'description' => 'Resets the request and internal values to avoid those fields will have any default value',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'linkTo' => 
      array (
        'description' => 'Builds a HTML A tag using framework conventions
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">linkTo</span>(<span class="string">\'signup/register\'</span>, <span class="string">\'Register Here!\'</span>)</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$text' => 
          array (
            'type' => 'unknown',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      '_inputField' => 
      array (
        'description' => 'Builds generic INPUT tags',
        'modifiers' => 
        array (
          0 => 'protected',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$type' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'textField' => 
      array (
        'description' => 'Builds a HTML input[type="text"] tag
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">textField</span>(<span class="keyword builtin">array</span>(<span class="string">"name"</span>, <span class="string">"size"</span> =&gt; <span class="number">30</span>))</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'passwordField' => 
      array (
        'description' => 'Builds a HTML input[type="password"] tag
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">passwordField</span>(<span class="keyword builtin">array</span>(<span class="string">"name"</span>, <span class="string">"size"</span> =&gt; <span class="number">30</span>))</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'hiddenField' => 
      array (
        'description' => 'Builds a HTML input[type="hidden"] tag
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">hiddenField</span>(<span class="keyword builtin">array</span>(<span class="string">"name"</span>, <span class="string">"value"</span> =&gt; <span class="string">"mike"</span>))</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'fileField' => 
      array (
        'description' => 'Builds a HTML input[type="file"] tag
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">fileField</span>(<span class="string">"file"</span>)</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'checkField' => 
      array (
        'description' => 'Builds a HTML input[type="check"] tag
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">checkField</span>(<span class="keyword builtin">array</span>(<span class="string">"name"</span>, <span class="string">"size"</span> =&gt; <span class="number">30</span>))</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'submitButton' => 
      array (
        'description' => 'Builds a HTML input[type="submit"] tag
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">submitButton</span>(<span class="string">"Save"</span>)</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'selectStatic' => 
      array (
        'description' => 'Builds a HTML SELECT tag using a PHP array for options
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">selectStatic</span>(<span class="string">"status"</span>, <span class="keyword builtin">array</span>(<span class="string">"A"</span> =&gt; <span class="string">"Active"</span>, <span class="string">"I"</span> =&gt; <span class="string">"Inactive"</span>))</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$data' => 
          array (
            'type' => 'unknown',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'select' => 
      array (
        'description' => 'Builds a HTML SELECT tag using a Phalcon_Model resultset as options
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">selectStatic</span>(<span class="keyword builtin">array</span>(
	<span class="string">"robotId"</span>,
	<span class="identifier">Robots</span>::<span class="identifier">find</span>(<span class="string">"type = \'mechanical\'"</span>),
	<span class="string">"using"</span> =&gt; <span class="keyword builtin">array</span>(<span class="string">"id"</span>, <span class="string">"name"</span>)
 ))</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$data' => 
          array (
            'type' => 'unknown',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'textArea' => 
      array (
        'description' => 'Builds a HTML TEXTAREA tag
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">textArea</span>(<span class="keyword builtin">array</span>(<span class="string">"comments"</span>, <span class="string">"cols"</span> =&gt; <span class="number">10</span>, <span class="string">"rows"</span> =&gt; <span class="number">4</span>))</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'form' => 
      array (
        'description' => 'Builds a HTML FORM tag
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">form</span>(<span class="string">"posts/save"</span>);
 <span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">form</span>(<span class="keyword builtin">array</span>(<span class="string">"posts/save"</span>, <span class="string">"method"</span> =&gt; <span class="string">"post"</span>));</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'endForm' => 
      array (
        'description' => 'Builds a HTML close FORM tag',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setTitle' => 
      array (
        'description' => 'Set the title of view content',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$title' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'appendTitle' => 
      array (
        'description' => 'Add to title of view content',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$title' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'prependTitle' => 
      array (
        'description' => 'Add before the title of view content',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$title' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getTitle' => 
      array (
        'description' => 'Get the title of view content',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'stylesheetLink' => 
      array (
        'description' => 'Builds a LINK[rel="stylesheet"] tag
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">stylesheetLink</span>(<span class="string">"http://fonts.googleapis.com/css?family=Rosario"</span>, <span class="keyword literal">false</span>);
 <span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">stylesheetLink</span>(<span class="string">"css/style.css"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$local' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => true,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'javascriptInclude' => 
      array (
        'description' => 'Builds a SCRIPT[type="javascript"] tag
 <pre class="source-code iphp"><span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">javascriptInclude</span>(<span class="string">"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"</span>, <span class="keyword literal">false</span>);
 <span class="keyword builtin">echo</span> <span class="identifier">Phalcon_Tag</span>::<span class="identifier">javascriptInclude</span>(<span class="string">"javascript/jquery.js"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$local' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => true,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'image' => 
      array (
        'description' => 'Builds HTML IMG tags',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$parameters' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Text' => 
  array (
    'description' => '',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'camelize' => 
      array (
        'description' => 'Converts strings to camelize style
 <pre class="source-code iphp"><span class="identifier">Phalcon_Utils</span>::<span class="identifier">camelize</span>(<span class="string">\'coco_bongo\'</span>); //<span class="identifier">CocoBongo</span></pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$str' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'uncamelize' => 
      array (
        'description' => 'Uncamelize strings which are camelized
 <pre class="source-code iphp"><span class="identifier">Phalcon_Utils</span>::<span class="identifier">camelize</span>(<span class="string">\'CocoBongo\'</span>); //<span class="identifier">coco_bongo</span></pre>',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$str' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Transaction_Failed' => 
  array (
    'description' => 'Phalcon_Transaction_Failed will thrown to exit a try/catch block for transactions',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Transaction_Failed constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$message' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$record' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getRecordMessages' => 
      array (
        'description' => 'Returns validation record messages which stop the transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getRecord' => 
      array (
        'description' => 'Returns validation record messages which stop the transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Model_Base',
      ),
    ),
  ),
  'Phalcon_Transaction_Manager' => 
  array (
    'description' => 'A transaction acts on a single database connection. If you have multiple class-specific
 databases, the transaction will not protect interaction among them

<pre class="source-code iphp"><span class="keyword">try</span> {

  <span class="tag">$<span class="identifier">transaction</span></span> = <span class="identifier">Phalcon_Transaction_Manager</span>::<span class="identifier">get</span>();

  <span class="tag">$<span class="identifier">robot</span></span> = <span class="keyword operator">new</span> <span class="identifier">Robots</span>();
  <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">setTransaction</span>(<span class="tag">$<span class="identifier">transaction</span></span>);
  <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span> = <span class="string">\'WALL·E\'</span>;
  <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">created_at</span> = <span class="identifier">date</span>(<span class="string">\'Y-m-d\'</span>);
  <span class="keyword">if</span>(<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">save</span>()==<span class="keyword literal">false</span>){
    <span class="tag">$<span class="identifier">transaction</span></span>-&gt;<span class="identifier">rollback</span>(<span class="string">"Can\'t save robot"</span>);
  }

  <span class="tag">$<span class="identifier">robotPart</span></span> = <span class="keyword operator">new</span> <span class="identifier">RobotParts</span>();
  <span class="tag">$<span class="identifier">robotPart</span></span>-&gt;<span class="identifier">setTransaction</span>(<span class="tag">$<span class="identifier">transaction</span></span>);
  <span class="tag">$<span class="identifier">robotPart</span></span>-&gt;<span class="identifier">type</span> = <span class="string">\'head\'</span>;
  <span class="keyword">if</span>(<span class="tag">$<span class="identifier">robotPart</span></span>-&gt;<span class="identifier">save</span>()==<span class="keyword literal">false</span>){
    <span class="tag">$<span class="identifier">transaction</span></span>-&gt;<span class="identifier">rollback</span>(<span class="string">"Can\'t save robot part"</span>);
  }

  <span class="tag">$<span class="identifier">transaction</span></span>-&gt;<span class="identifier">commit</span>();

}
<span class="keyword">catch</span>(<span class="identifier">Phalcon_Transaction_Failed</span> <span class="tag">$<span class="identifier">e</span></span>){
  <span class="keyword builtin">echo</span> <span class="string">\'Failed, reason: \'</span>, <span class="tag">$<span class="identifier">e</span></span>-&gt;<span class="identifier">getMessage</span>();
}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'has' => 
      array (
        'description' => 'Checks whether manager has an active transaction',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'get' => 
      array (
        'description' => 'Returns a new Phalcon_Transaction or an already created once',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$autoBegin' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => true,
            'byReference' => false,
          ),
        ),
        'return' => 'Phalcon_Transaction',
      ),
      'rollbackPendent' => 
      array (
        'description' => 'Rollbacks active transactions whithin the manager',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'commit' => 
      array (
        'description' => 'Commmits active transactions whithin the manager',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'rollback' => 
      array (
        'description' => 'Rollbacks active transactions whithin the manager
 Collect will remove transaction from the manager',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$collect' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'notifyRollback' => 
      array (
        'description' => 'Notifies the manager about a rollbacked transaction',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$transaction' => 
          array (
            'type' => 'Phalcon_Transaction',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'notifyCommit' => 
      array (
        'description' => 'Notifies the manager about a commited transaction',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$transaction' => 
          array (
            'type' => 'Phalcon_Transaction',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'collectTransactions' => 
      array (
        'description' => 'Remove all the transactions from the manager',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'isAutomatic' => 
      array (
        'description' => 'Checks whether manager will inject an automatic transaction to all newly
 created instances of Phalcon_Model_base',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getAutomatic' => 
      array (
        'description' => 'Returns automatic transaction for instances of Phalcon_Model_base',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Transaction',
      ),
    ),
  ),
  'Phalcon_Transaction' => 
  array (
    'description' => 'Transactions are protective blocks where SQL statements are only permanent if they can
 all succeed as one atomic action. Phalcon_Transaction is intended to be used with Phalcon_Model_Base.
 Phalcon Transactions should be created using Phalcon_Transaction_Manager.

<pre class="source-code iphp"><span class="keyword">try</span> {

  <span class="tag">$<span class="identifier">transaction</span></span> = <span class="identifier">Phalcon_Transaction_Manager</span>::<span class="identifier">get</span>();

  <span class="tag">$<span class="identifier">robot</span></span> = <span class="keyword operator">new</span> <span class="identifier">Robots</span>();
  <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">setTransaction</span>(<span class="tag">$<span class="identifier">transaction</span></span>);
  <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">name</span> = <span class="string">\'WALL·E\'</span>;
  <span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">created_at</span> = <span class="identifier">date</span>(<span class="string">\'Y-m-d\'</span>);
  <span class="keyword">if</span>(<span class="tag">$<span class="identifier">robot</span></span>-&gt;<span class="identifier">save</span>()==<span class="keyword literal">false</span>){
    <span class="tag">$<span class="identifier">transaction</span></span>-&gt;<span class="identifier">rollback</span>(<span class="string">"Can\'t save robot"</span>);
  }

  <span class="tag">$<span class="identifier">robotPart</span></span> = <span class="keyword operator">new</span> <span class="identifier">RobotParts</span>();
  <span class="tag">$<span class="identifier">robotPart</span></span>-&gt;<span class="identifier">setTransaction</span>(<span class="tag">$<span class="identifier">transaction</span></span>);
  <span class="tag">$<span class="identifier">robotPart</span></span>-&gt;<span class="identifier">type</span> = <span class="string">\'head\'</span>;
  <span class="keyword">if</span>(<span class="tag">$<span class="identifier">robotPart</span></span>-&gt;<span class="identifier">save</span>()==<span class="keyword literal">false</span>){
    <span class="tag">$<span class="identifier">transaction</span></span>-&gt;<span class="identifier">rollback</span>(<span class="string">"Can\'t save robot part"</span>);
  }

  <span class="tag">$<span class="identifier">transaction</span></span>-&gt;<span class="identifier">commit</span>();

}
<span class="keyword">catch</span>(<span class="identifier">Phalcon_Transaction_Failed</span> <span class="tag">$<span class="identifier">e</span></span>){
  <span class="keyword builtin">echo</span> <span class="string">\'Failed, reason: \'</span>, <span class="tag">$<span class="identifier">e</span></span>-&gt;<span class="identifier">getMessage</span>();
}</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Transaction constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$autoBegin' => 
          array (
            'type' => 'boolean',
            'optional' => true,
            'default' => false,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setTransactionManager' => 
      array (
        'description' => 'Sets transaction manager related to the transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$manager' => 
          array (
            'type' => 'Phalcon_Transaction_Manager',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'begin' => 
      array (
        'description' => 'Starts the transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'commit' => 
      array (
        'description' => 'Commits the transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'rollback' => 
      array (
        'description' => 'Rollbacks the transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$rollbackMessage' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
          '$rollbackRecord' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'getConnection' => 
      array (
        'description' => 'Returns connection related to transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Db',
      ),
      'setIsNewTransaction' => 
      array (
        'description' => 'Sets if is a reused transaction or new once',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$isNew' => 
          array (
            'type' => 'boolean',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setRollbackOnAbort' => 
      array (
        'description' => 'Sets flag to rollback on abort the HTTP connection',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$rollbackOnAbort' => 
          array (
            'type' => 'boolean',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'isManaged' => 
      array (
        'description' => 'Checks whether transaction is managed by a transaction manager',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'setDependencyPointer' => 
      array (
        'description' => 'Changes dependency internal pointer',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$pointer' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'attachDependency' => 
      array (
        'description' => 'Attaches Phalcon_Model_Base object to the active transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$pointer' => 
          array (
            'type' => 'int',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$object' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'save' => 
      array (
        'description' => 'Make a bulk save on all attached objects',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'getMessages' => 
      array (
        'description' => 'Returns validations messages from last save try',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'isValid' => 
      array (
        'description' => 'Checks whether internal connection is under an active transaction',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'boolean',
      ),
      'setRollbackedRecord' => 
      array (
        'description' => 'Sets object which generates rollback action',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$record' => 
          array (
            'type' => 'Phalcon_Model_Base',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_Translate_Adapter_Array' => 
  array (
    'description' => 'Allows to define translation lists using PHP arrays',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Translate_Adapter_Array constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$options' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'query' => 
      array (
        'description' => 'Returns the translation related to the given key',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$index' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$placeholders' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'exists' => 
      array (
        'description' => 'Check whether is defined a translation key in the internal array',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$index' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Translate_Exception' => 
  array (
    'description' => 'Class for exceptions thrown by Phalcon_Translate',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_Translate' => 
  array (
    'description' => 'Translate component allows the creation of multi-language applications using
 different adapters for translation lists.',
    'extends' => NULL,
    'implements' => 
    array (
      0 => 'ArrayAccess',
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_Translate constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$adapter' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_' => 
      array (
        'description' => 'Returns the translation string of the given key',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$translateKey' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$placeholders' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'offsetSet' => 
      array (
        'description' => 'Sets a translation value',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$offset' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'offsetExists' => 
      array (
        'description' => 'Check whether a translation key exists',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$translateKey' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'boolean',
      ),
      'offsetUnset' => 
      array (
        'description' => 'Elimina un indice del diccionario',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$offset' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'offsetGet' => 
      array (
        'description' => 'Returns the translation related to the given key',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$traslateKey' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_Utils' => 
  array (
    'description' => 'Implements functionality used widely by the framework',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      'camelize' => 
      array (
        'description' => 'This function is now deprecated, use Phalcon_Text::camelize instead',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$str' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'uncamelize' => 
      array (
        'description' => 'This function is now deprecated, use Phalcon_Text::uncamelize instead',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$str' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'getUrl' => 
      array (
        'description' => 'Gets public URL to phalcon instance',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$uri' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'getLocalPath' => 
      array (
        'description' => 'Gets path to local file',
        'modifiers' => 
        array (
          0 => 'public',
          1 => 'static',
        ),
        'parameters' => 
        array (
          '$extraPath' => 
          array (
            'type' => 'string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
    ),
  ),
  'Phalcon_View_Engine_Mustache' => 
  array (
    'description' => 'Adapter to use Mustache library as templating engine',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_View_Engine_Mustache constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$view' => 
          array (
            'type' => 'Phalcon_View',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'render' => 
      array (
        'description' => 'Renders a view using the template engine',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$path' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$params' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '__isset' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$property' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '__get' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$property' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '__call' => 
      array (
        'description' => '',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$method' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$arguments' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_View_Engine_Php' => 
  array (
    'description' => 'Adapter to use PHP itself as templating engine',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_View_Engine_Php constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$view' => 
          array (
            'type' => 'Phalcon_View',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'render' => 
      array (
        'description' => 'Renders a view using the template engine',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$path' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$params' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_View_Engine_Twig' => 
  array (
    'description' => 'Adapter to use Twig library as templating engine',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_View_Engine_Twig constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$view' => 
          array (
            'type' => 'Phalcon_View',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'render' => 
      array (
        'description' => 'Renders a view using the template engine',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$path' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$params' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_View_Engine' => 
  array (
    'description' => 'All the template engine adapters must inherit this class. This provides
 basic interfacing between the engine and the Phalcon_View component.',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_View_Engine constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$view' => 
          array (
            'type' => 'Phalcon_View',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'initialize' => 
      array (
        'description' => 'Initializes the engine adapter',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$view' => 
          array (
            'type' => 'Phalcon_View',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$options' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getControllerName' => 
      array (
        'description' => 'Gets the name of the controller rendered',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getActionName' => 
      array (
        'description' => 'Gets the name of the action rendered',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getContent' => 
      array (
        'description' => 'Returns cached ouput on another view stage',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'url' => 
      array (
        'description' => 'Generates a external absolute path to an application uri',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$params' => 
          array (
            'type' => 'array|string',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'path' => 
      array (
        'description' => 'Returns a local path',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$params' => 
          array (
            'type' => 'array|string',
            'optional' => true,
            'default' => '',
            'byReference' => false,
          ),
        ),
        'return' => 'string',
      ),
      'partial' => 
      array (
        'description' => 'Renders a partial inside another view',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$partialPath' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
    ),
  ),
  'Phalcon_View_Exception' => 
  array (
    'description' => 'Class for exceptions thrown by Phalcon_View',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
    ),
    'type' => 'public',
    'methods' => 
    array (
    ),
  ),
  'Phalcon_View' => 
  array (
    'description' => 'Phalcon_View is a class for working with the "view" portion of the model-view-controller pattern.
 That is, it exists to help keep the view script separate from the model and controller scripts.
 It provides a system of helpers, output filters, and variable escaping.

 <pre class="source-code iphp"><span class="comment">//Setting views directory
</span> <span class="tag">$<span class="identifier">view</span></span> = <span class="keyword operator">new</span> <span class="identifier">Phalcon_View</span>();
 <span class="tag">$<span class="identifier">view</span></span>-&gt;<span class="identifier">setViewsDir</span>(<span class="string">\'app/views/\'</span>);

 <span class="tag">$<span class="identifier">view</span></span>-&gt;<span class="identifier">start</span>();
 <span class="comment">//Shows recent posts view (app/views/posts/recent.phtml)
</span> <span class="tag">$<span class="identifier">view</span></span>-&gt;<span class="identifier">render</span>(<span class="string">\'posts\'</span>, <span class="string">\'recent\'</span>);
 <span class="tag">$<span class="identifier">view</span></span>-&gt;<span class="identifier">finish</span>();

 <span class="comment">//Printing views output
</span> <span class="keyword builtin">echo</span> <span class="tag">$<span class="identifier">view</span></span>-&gt;<span class="identifier">getContent</span>();</pre>',
    'extends' => NULL,
    'implements' => 
    array (
    ),
    'constants' => 
    array (
      'LEVEL_MAIN_LAYOUT' => 5,
      'LEVEL_AFTER_TEMPLATE' => 4,
      'LEVEL_LAYOUT' => 3,
      'LEVEL_BEFORE_TEMPLATE' => 2,
      'LEVEL_ACTION_VIEW' => 1,
      'LEVEL_NO_RENDER' => 0,
    ),
    'type' => 'public',
    'methods' => 
    array (
      '__construct' => 
      array (
        'description' => 'Phalcon_View constructor',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$options' => 
          array (
            'type' => 'Phalcon_Config|stClass',
            'optional' => true,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setViewsDir' => 
      array (
        'description' => 'Sets views directory. Depending of your platform, always add a trailing slash or backslash',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$viewsDir' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getViewsDir' => 
      array (
        'description' => 'Gets views directory',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'setBasePath' => 
      array (
        'description' => 'Sets base path. Depending of your platform, always add a trailing slash or backslash
 <pre class="source-code iphp"><span class="tag">$<span class="identifier">view</span></span>-&gt;<span class="identifier">setBasePath</span>(<span class="identifier">__DIR__</span>.<span class="string">\'/\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$basePath' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setRenderLevel' => 
      array (
        'description' => 'Sets the render level for the view
 <pre class="source-code iphp"><span class="comment">//Render the view related to the controller only
</span> <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">view</span>-&gt;<span class="identifier">setRenderLevel</span>(<span class="identifier">Phalcon_View</span>::<span class="identifier">LEVEL_VIEW</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$level' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setMainView' => 
      array (
        'description' => 'Sets default view name. Must be a file without extension in the views directory
 <pre class="source-code iphp"><span class="comment">//Renders as main view views-dir/inicio.phtml
</span> <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">view</span>-&gt;<span class="identifier">setMainView</span>(<span class="string">\'inicio\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$viewPath' => 
          array (
            'type' => 'unknown',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setTemplateBefore' => 
      array (
        'description' => 'Appends template before controller layout',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$templateBefore' => 
          array (
            'type' => 'string|array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'cleanTemplateBefore' => 
      array (
        'description' => 'Resets any template before layouts',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'setTemplateAfter' => 
      array (
        'description' => 'Appends template after controller layout',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$templateAfter' => 
          array (
            'type' => 'string|array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'cleanTemplateAfter' => 
      array (
        'description' => 'Resets any template before layouts',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'setParamToView' => 
      array (
        'description' => 'Adds parameters to views (alias of setVar)',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$key' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setVar' => 
      array (
        'description' => 'Adds parameters to views',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$key' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$value' => 
          array (
            'type' => 'mixed',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getParamsToView' => 
      array (
        'description' => 'Returns parameters to views',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      'getControllerName' => 
      array (
        'description' => 'Gets the name of the controller rendered',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getActionName' => 
      array (
        'description' => 'Gets the name of the action rendered',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'getParams' => 
      array (
        'description' => 'Gets extra parameters of the action rendered',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'start' => 
      array (
        'description' => 'Starts rendering process enabling the output buffering',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      '_loadTemplateEngines' => 
      array (
        'description' => 'Loads registered template engines, if none is registered use Phalcon_View_Engine_Php',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'array',
      ),
      '_engineRender' => 
      array (
        'description' => 'Checks whether view exists on registered extensions and render it',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
          '$engines' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$viewPath' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$silence' => 
          array (
            'type' => 'boolean',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$cache' => 
          array (
            'type' => 'Phalcon_Cache',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'registerEngines' => 
      array (
        'description' => 'Register templating engines
<pre class="source-code iphp"><span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">view</span>-&gt;<span class="identifier">registerEngines</span>(<span class="keyword builtin">array</span>(
  <span class="string">".phtml"</span> =&gt; <span class="string">"Php"</span>,
  <span class="string">".mhtml"</span> =&gt; <span class="string">"Mustache"</span>
));</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$engines' => 
          array (
            'type' => 'array',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'render' => 
      array (
        'description' => 'Executes render process from request data
<pre class="source-code iphp"><span class="tag">$<span class="identifier">view</span></span>-&gt;<span class="identifier">start</span>();
 <span class="comment">//Shows recent posts view (app/views/posts/recent.phtml)
</span> <span class="tag">$<span class="identifier">view</span></span>-&gt;<span class="identifier">render</span>(<span class="string">\'posts\'</span>, <span class="string">\'recent\'</span>);
 <span class="tag">$<span class="identifier">view</span></span>-&gt;<span class="identifier">finish</span>();</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$controllerName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$actionName' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
          '$params' => 
          array (
            'type' => 'array',
            'optional' => true,
            'default' => 
            array (
            ),
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'pick' => 
      array (
        'description' => 'Choose a view different to render than last-controller/last-action
 <pre class="source-code iphp"><span class="keyword">class</span> <span class="identifier">ProductsController</span> <span class="keyword">extends</span> <span class="identifier">Phalcon_Controller</span>
 {
    <span class="keyword">function</span> <span class="identifier">saveAction</span>()
    {
         <span class="comment">//Do some save stuff...
</span>         <span class="comment">//Then show the list view
</span>         <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">view</span>-&gt;<span class="identifier">pick</span>(<span class="string">"products/list"</span>);
    }
 }</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$renderView' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'partial' => 
      array (
        'description' => 'Renders a partial view
 <pre class="source-code iphp"><span class="comment">//Show a partial inside another view
</span> <span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">partial</span>(<span class="string">\'shared/footer\'</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$partialPath' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'finish' => 
      array (
        'description' => 'Finishes the render process by stopping the output buffering',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
      'setCache' => 
      array (
        'description' => 'Set the cache object or cache parameters to do the resultset caching',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$cache' => 
          array (
            'type' => 'Phalcon_Cache_Backend|object',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      '_createCache' => 
      array (
        'description' => 'Create a Phalcon_Cache based on the internal cache options',
        'modifiers' => 
        array (
          0 => 'protected',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Cache',
      ),
      'getCache' => 
      array (
        'description' => 'Returns the cache instance used to cache',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'Phalcon_Cache',
      ),
      'cache' => 
      array (
        'description' => 'Cache the actual view render to certain level',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$options' => 
          array (
            'type' => 'boolean|array',
            'optional' => true,
            'default' => true,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'setContent' => 
      array (
        'description' => 'Externally sets the view content
<pre class="source-code iphp"><span class="tag">$<span class="identifier">this</span></span>-&gt;<span class="identifier">view</span>-&gt;<span class="identifier">setContent</span>(<span class="string">"&lt;h1&gt;hello&lt;/h1&gt;"</span>);</pre>',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
          '$content' => 
          array (
            'type' => 'string',
            'optional' => false,
            'default' => NULL,
            'byReference' => false,
          ),
        ),
        'return' => 'unknown',
      ),
      'getContent' => 
      array (
        'description' => 'Returns cached ouput from another view stage',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'string',
      ),
      'disable' => 
      array (
        'description' => 'Disable view. No show any view or template',
        'modifiers' => 
        array (
          0 => 'public',
        ),
        'parameters' => 
        array (
        ),
        'return' => 'unknown',
      ),
    ),
  ),
);