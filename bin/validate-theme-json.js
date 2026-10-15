const Ajv = require('ajv').default, addFormats = require('ajv-formats');
const fs = require('fs'), path = require('path');
const [schemaPath, ...files] = process.argv.slice(2);
const ajv = new Ajv({ allErrors: true, strict: false, allowUnionTypes: true }); addFormats(ajv);
const validate = ajv.compile(JSON.parse(fs.readFileSync(schemaPath, 'utf8')));
let failed = 0;
for (const f of files) {
  const ok = validate(JSON.parse(fs.readFileSync(f, 'utf8')));
  console.log((ok ? 'ok   ' : 'FAIL ') + f);
  if (!ok) { failed++; for (const e of validate.errors.slice(0, 8)) console.log('   ', e.instancePath, e.message, JSON.stringify(e.params)); }
}
process.exit(failed ? 1 : 0);
