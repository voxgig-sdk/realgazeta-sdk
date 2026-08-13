# frozen_string_literal: true

# Typed models for the Realgazeta SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# Author entity data model.
#
# @!attribute [rw] authors
#   @return [Array, nil]
#
# @!attribute [rw] meta
#   @return [Hash, nil]
Author = Struct.new(
  :authors,
  :meta,
  keyword_init: true
)

# Request payload for Author#load.
#
# @!attribute [rw] slug
#   @return [String]
AuthorLoadMatch = Struct.new(
  :slug,
  keyword_init: true
)

