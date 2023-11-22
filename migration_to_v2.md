# Livewire Datatables Migrate Guide from 1st to 2nd version

### Impact Changes
- Changed vendor's namespace from ```MedicOneSystems``` to ```Arm092```
- Changed default directory of data-tables from ```app/Http/Livewire``` to ```app/Livewire/Datatables```
- Added return types of most methods, if you have overwritten them, you may need to add the return type to your method
- Defined types of most properties, if you have overwritten them, you may need to add the type to your property
- In LivewireDatatable class some methods names changed because there were properties with the same name, so the method names were changed to avoid conflicts
- As mentioned in previous point, `columns` method renamed to `getColumns` (most used)
- View files need to be republished, if you have published ones
- Also defined types of most properties of Column classes, if you have overwritten them, you may need to add the type to your property
- Dropped support of `"illuminate/support"` under version 9.0
- Minimal PHP version is 8.1 now
- Minimal Laravel version is 9.0 now
- Minimal Livewire version is 3.0 now

