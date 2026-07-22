# Realgazeta SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module RealgazetaFeatures
  def self.make_feature(name)
    case name
    when "base"
      RealgazetaBaseFeature.new
    when "test"
      RealgazetaTestFeature.new
    else
      RealgazetaBaseFeature.new
    end
  end
end
