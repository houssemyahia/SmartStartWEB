<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Series
{
    use ColorTrait;

    /**
     * A boolean value, where true means that the series should have a legend entry,
     * and false means that it should not. Default is true.
     *
     * @var bool
     */
    protected $visibleInLegend;

    /**
     * @param bool $visibleInLegend
     *
     * @return $this
     */
    public function setVisibleInLegend($visibleInLegend)
    {
        $this->visibleInLegend = $visibleInLegend;

        return $this;
    }
}
