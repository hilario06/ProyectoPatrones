    @extends('layouts.app')
    @section('content')
    <template v-if="menu==0">
         <h1>Escritorio de todos nostros</h1>
     </template>

    <template v-if="menu==1">
         <categoria></categoria>
     </template>
    @endsection