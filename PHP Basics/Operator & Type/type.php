PHP has 10 primitive types
####### Scalar Types #######
# Integer (1,2,-1,2)
# Float (1.1,2.1,-1.1,-2.1)
# Boolean (only true, false)
# string ('abcd')

####### Compound Types #######
# Array ([1,2,-1,2])
# Object ( new Date())
# Callable ( callable $a )
# Iterable (iterable $items)

####### Special Types #######

# Resource (mysql connection)
# NULL (null)

##### Important function #######

  gettype() :possible return type: 
  [array,boolean, float, integer, NULL, numeric, object, string, unknown type]
  is_{type}() 
  /* all return ture or false*/
  is_bool()
  is_array()
  is_callable()
  is_float()
  is_int()
  is_null()
  is_numeric()
  is_object()
  is_resouece()
  is_scalar()
  is_string()
################################